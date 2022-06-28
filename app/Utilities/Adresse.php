<?php
namespace App\Utilities;
use DB;

class Adresse{

    public $data;

    public function __construct()
    {
        try {
            $adresse = DB::table("mcs_adresses")->get('nom_adr');
        $this->data = $adresse;
        return $adresse;
        } catch (Exception $ex) {
            return $e->getMessage();
        }
    }

}
?>
