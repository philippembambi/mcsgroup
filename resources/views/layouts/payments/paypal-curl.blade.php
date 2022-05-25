<?php
    $PAYPAL_SANDBOX = true;

    $_GET['PayerID'] = ''; // this value i received after successful payment

        $api_endpoint = ($PAYPAL_SANDBOX === true)?'https://api-m.sandbox.paypal.com':'https://api-m.paypal.com';

        $accessToken = '';

        $clientId = 'AazdUEXrw50silSvZHi0ZqbJRW1Ya5jcFqFm0Yc8YrDXdiMku329JaFtrLI259QIyQ6ICkczDriBdEij';

        $secret = 'EGod-yeKmVOGcf2B0B4cVP5_iADQddza-GlakzYw_oYfC4bO9zZrK1gP2OWjIAljHRTfAJtLm5KDRKMy';

        $PAYPAL_DB_TABLE = 'paypal_donor';

            /*get access token*/

                $headers = [];
                $headers['Accept'] = 'application/json';
                $headers['Accept-Language'] = 'en_US';

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $api_endpoint.'/v1/oauth2/token/');
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_USERPWD, $clientId.':'.$secret);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS,"grant_type=client_credentials");

                $token_output = curl_exec($ch);
                curl_close ($ch);
                $token_output = json_decode($token_output, true);
                if (count($token_output) > 0) {

                    /*get token*/
                    $dbtoken = $db->rawQuery("SELECT access_token,nonce,expires_in FROM " . $PAYPAL_DB_TABLE);

                    if ($dbtoken) {
                        foreach ($dbtoken as $key => $value) {

                            $nonceTime = strtotime(str_replace('T', ' ', substr($value->nonce, 0, 19)));

                            $timeDif = time() - $nonceTime;

                            if ($value->expires_in < $timeDif) {
                                $dbtoken = $db->rawQuery("DELETE * FROM " . $PAYPAL_DB_TABLE);
                                tokenInDb($token_output);
                                $accessToken = $token_output['access_token'];
                            }else{
                                $accessToken = $value->access_token;
                            }
                        }
                    }else{
                        tokenInDb($token_output);
                        $accessToken = $token_output['access_token'];
                    }

                    /*get token*/

                    /*get transaction*/

                    if ($accessToken) {

                        $headers = [];
                        $headers['Content-Type'] = 'application/json';
                        $headers['Authorization'] = 'Bearer '.$accessToken;

                        $data = '{
                            "transaction_details" : [
                                {
                                    "payer_info"    :   {
                                        "account_id"    :   "'.$_GET['PayerID'].'"
                                    }
                                }
                            ]
                        }';

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $api_endpoint.'/v1/reporting/transactions/'.'?transaction_currency=USD');
                        //curl_setopt($ch, CURLOPT_VERBOSE, 1);
                        //curl_setopt($ch, CURLOPT_HEADER, 0);
                        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                        //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

                        $trans = curl_exec($ch);
                        curl_close($ch);

                        print_r($trans);
                        die;
                    }

                    /*get transaction*/
                }

                /*get access token*/

function tokenInDb($token_output){

    //print_r($token_output);
    //die;

    global $db;
    global $PAYPAL_DB_TABLE;

    /*insert token in db*/
    $db->insert($PAYPAL_DB_TABLE, [
        'access_token' => $token_output['access_token'],
        'token_type' => $token_output['token_type'],
        'app_id' => $token_output['app_id'],
        'expires_in' => $token_output['expires_in'],
        'nonce' => $token_output['nonce']
    ]);
    /*insert token in db*/
}

?>
