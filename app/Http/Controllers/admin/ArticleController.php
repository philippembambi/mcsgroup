<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Purchase;
use DB;

class ArticleController extends Controller
{

    public function __invoke()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $article = Article::find($id);

        $data = DB::table('articles')
        ->leftJoin('categories', 'articles.category', '=', 'categories.id')
        ->where('articles.id', '=', $id)
        ->get(['categories.label AS label']);

        $basket = DB::table('baskets')
        ->leftJoin('articles', 'baskets.article_id', '=', 'articles.id')
        ->where('articles.id', '=', $id)
        ->get();

        $purchases = DB::table('purchases')
        ->leftJoin('articles', 'purchases.article_id', '=', 'articles.id')
        ->where('articles.id', '=', $id)
        ->get();

        $chiffre_affaires = DB::table('purchases')
        ->leftJoin('articles', 'purchases.article_id', '=', 'articles.id')
        ->where('articles.id', '=', $id)
        ->Where('purchases.state', '=', "Validé")
        ->groupBy('articles.id')
        ->sum('total_price');


//       dd($chiffre_affaires);
        return view("admin.articles.show", [
            'article' => $article,
            'data' => $data,
            'basket' => $basket,
            'purchases' => $purchases,
            'chiffre_affaires' => $chiffre_affaires
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
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
