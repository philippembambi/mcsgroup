<?php
namespace App\Utilities;
use DB;

class Cmd{

    public $cmd_data;
    public $purchase_data;
    public $basket_data;
    public $feedback_data;

    public function __construct()
    {
        $cmd = DB::table('purchases')
            ->leftJoin('articles', 'purchases.article_id', '=', 'articles.id')
            ->leftJoin('users', 'users.id', '=', 'purchases.user_id')
            ->leftJoin('payments', 'payments.purchase_id', '=', 'purchases.id')
            ->Where('purchases.state', '=', "En attente")->count();
           $this->cmd_data  = $cmd;

           $purchases = DB::table('purchases')
           ->leftJoin('articles', 'purchases.article_id', '=', 'articles.id')
           ->leftJoin('users', 'users.id', '=', 'purchases.user_id')
           ->orderBy('purchases.id', 'DESC')
           ->Where('purchases.state', '=', "Validé")
           ->count();
               $this->purchase_data = $purchases;

               $basket = DB::table('baskets')
               ->leftJoin('articles', 'baskets.article_id', '=', 'articles.id')
               ->leftJoin('users', 'users.id', '=', 'baskets.user_id')
               ->get([
                   'articles.tag', 'baskets.created_at AS date_panier',
                   'desc', 'picture_1', 'price', 'users.fullname', 'users.phone_number', 'users.email'
                   ]);
                   $this->basket_data = $basket;

                   $feedback = DB::table('feed_backs')->count();
                   $this->feedback_data = $feedback;
   
    }
    public function get_cmd()
    {
        
    }

    }
        ?>        