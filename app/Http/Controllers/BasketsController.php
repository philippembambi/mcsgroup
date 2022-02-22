<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use DB;
use Flashy;

class BasketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset(auth()->user()->id)){
        $savedart = DB::table('baskets')
        ->leftJoin('users', 'users.id', '=', 'baskets.user_id')
        ->leftJoin('articles', 'articles.id', '=', 'baskets.article_id')
        ->where('users.id', "=", auth()->user()->id)
        ->simplePaginate(6);

        return view("layouts.baskets.show")->with('savedart', $savedart);
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        try {
            $id_user = auth()->user()->id;

        } catch (\Throwable $th) {
            $id_user = 0;
        }
        */
      //  dd($request->ip());
     // abort(404);
        Basket::create([
            'article_id' => $request->art_id,
            'user_id' => auth()->user()->id
            ]);
        Flashy::success("Vous venez d'ajouter un article au panier");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
