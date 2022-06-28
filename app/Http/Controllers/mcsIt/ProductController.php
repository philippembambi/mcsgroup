<?php

namespace App\Http\Controllers\mcsIt;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function addToWishes()
    {
        dd("Hello");
        return response()->json(['info'=>'Ajax request submitted successfully']);
    }
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $montant = $request->amount;
        $amount = $request->amount;

        if($montant == null)
        {
            $amount = 550;
        }
        $expression = $request->get("searchText");
        $results = Article::query()
        ->when($expression, fn ($query) => $query->where('tag', 'like', "%{$expression}%"))->Where('price', '<=', (int) $amount + 50)
        ->simplePaginate(6);

        return view('layouts.search.index', [
            'results' => $results,
            'searchText' => $expression
        ]);

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
        $arts = Article::where("id_ordi", "=", 1)->orWhere("id_ordi", "=", 5)->orderBy("id", 'ASC')->paginate(8);

        return view("mcsIt.layouts.product.details", [
            'article' => $article,
            'arts' => $arts
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
    public function destroy($id)
    {
        //
    }
}
