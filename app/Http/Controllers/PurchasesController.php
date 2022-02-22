<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Article;
use Flashy;
use DB;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset(auth()->user()->id)){
        $savedart = DB::table('purchases')
        ->leftJoin('users', 'users.id', '=', 'purchases.user_id')
        ->leftJoin('articles', 'articles.id', '=', 'purchases.article_id')
        ->where('users.id', "=", auth()->user()->id)
        ->orderBy('purchases.id', 'desc')
        ->get(['purchases.id AS idpurchase', 'picture_1', 'tag', 'total_price', 'state', 'purchases.created_at as date']);

        //dd($savedart);
        return view("layouts.baskets.purchases")->with('savedart', $savedart);
        }
        else{
        Flashy::error("Veillez vous authentifier avant de créer un panier");
        return redirect()->route("user.authenticate");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchase = Purchase::find($id);

        $article = DB::table('articles')
        ->leftJoin('purchases', 'articles.id', '=', 'purchases.article_id')
        ->where('purchases.id', "=", $id)
        ->get(['articles.tag as libelle'])->take(1);

        return view("layouts.purchase.show", [
            'purchase' => $purchase,
            'article' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase, Request $request)
    {
        $purchase->delete();

        $savedart = DB::table('purchases')
        ->leftJoin('users', 'users.id', '=', 'purchases.user_id')
        ->leftJoin('articles', 'articles.id', '=', 'purchases.article_id')
        ->where('users.id', "=", auth()->user()->id)
        ->orderBy('purchases.id', 'desc')
        ->get(['purchases.id AS idpurchase', 'picture_1', 'tag', 'total_price', 'state', 'purchases.created_at as date']);

        Flashy::error("Vous venez de supprimer une commande");
        return redirect()->route('basket.purchases')->with('savedart', $savedart);
    }
}
