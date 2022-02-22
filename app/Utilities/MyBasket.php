<?php
namespace App\Utilities;
use App\Models\Basket;

class MyBasket{

   public function countItems(){

    try {
    $basket = Basket::where("user_id", "=", auth()->user()->id)->get();
    return $basket->count();

    } catch (\Throwable $th) {
        return 0;
    }

}
}
?>
