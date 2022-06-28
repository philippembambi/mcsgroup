<?php
namespace App\Utilities;
use DB;

class Contact{

    public $data;

    public function __construct()
    {
        try {
            $contact = DB::table("mcs_contact")->get('contenu');
        $this->data = $contact;
        return $contact;
        } catch (Exception $ex) {
            return $e->getMessage();
        }
    }

}
?>
