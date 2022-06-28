<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use Flashy;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use DB;

class PaymentController extends Controller
{
    public $gateway;
    public static $_article_tag;
    public static $_article_code;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

    public function index()
    {
        return view('layouts.payments.index');
    }
/*
Dans les étapes précédentes, nous envoyons le montant à payer sur PayPal. Vous pouvez également envoyer des informations sur le produit. L’utilisateur peut voir ces détails de produit sur la page de paiement avant d’effectuer un paiement.

Pour envoyer les informations sur le produit, vous devez transmettre le tableau ‘items’ à la purchaseméthode comme suit.
*/
    public function purchase()
    {
        $response = $this->gateway->purchase(array(
            'amount' => $request->input('amount'),
            'items' => array(
                array(
                    'name' => 'Achat article',
                    'price' => $request->input('amount'),
                    'description' => 'Effectuer un achat en ligne via McsGroupe',
                    'quantity' => 1
                ),
            ),
            'currency' => env('PAYPAL_CURRENCY'),
            'returnUrl' => url('paypal/paymentsuccess'),
            'cancelUrl' => url('paypal/paymenterror'),
        ))->send();
    }

    public function charge(Request $request)
    {
        self::$_article_tag = $request->article_tag;
        self::$_article_code = $request->code_article;
        dd(self::$_article_code);
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paypal/paymentsuccess'),
                    'cancelUrl' => url('paypal/paymenterror'),
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    //dd($response->getMessage());
                    Flashy::error($response->getMessage());
                    return redirect()->route("basket.purchases");
                }
            } catch(Exception $e) {
                Flashy::error($e->getMessage());
                return redirect()->route("basket.purchases");
                //dd($e->getMessage());
            }
    }

    public function payment_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();

                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                }
                $content = "Informations confidentielles de votre transaction : ID_TRANSACTION : ".$arr_body['id']."/ ID_PAYEUR : ".$arr_body['payer']['payer_info']['payer_id']."/ EMAIL_PAYEUR :".$arr_body['payer']['payer_info']['email']."/ Montant TTC : ".$arr_body['transactions'][0]['amount']['total'].env('PAYPAL_CURRENCY');
                $name = $arr_body['id'];
                $mcs_adresses = DB::table("mcs_adresses")->get();
                $qrcode = QrCode::size(200)->format('svg')->generate($content, 'qr-codes/'.$name.'.svg');
                $msg = "Paiement effectué avec succès. Votre ID de la transaction est : ". $arr_body['id'];
                Flashy::success($msg);

                return view("layouts.purchase.purchaseCompleted", [
                    'article_tag' => $this->_article_tag,
                    'article_code' => $this->_article_code,
                    'payment_id' => $arr_body['id'],
                    'payer_id' => $arr_body['payer']['payer_info']['payer_id'],
                    'payer_email' => $arr_body['payer']['payer_info']['email'],
                    'amount' => $arr_body['transactions'][0]['amount']['total'],
                    'currency' => env('PAYPAL_CURRENCY'),
                    'payment_status' => $arr_body['state'],
                    'adresses' => $mcs_adresses,
                    'code' => $name
                ]);
            } else {
                Flashy::error($response->getMessage());
                return redirect()->route("basket.purchases");
            }
        } else {
            $msg = 'La transaction a été déclinée';
            Flashy::error($msg);
            return redirect()->route("basket.purchases");
        }
    }

    public function payment_error()
    {
        $msg = 'Vous avez annulé le paiement.';
        Flashy::error($msg);
        return redirect()->route("basket.purchases");
    }

    public function payment_completed()
    {

    }
}
