<?php
namespace App\Utilities;
use App\Models\Purchase as Purchases;

class Purchase{

   public function countPurchases(){

    try {
    $Purchase = Purchases::where("user_id", "=", auth()->user()->id)->get();
    return $Purchase->count();

    } catch (\Throwable $th) {
        return 0;
    }

}
}
?>
