<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Category;
use DB;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

		public function __invoke()
		{
            $categories = Category::all();

            return view('admin.adverts.add', [
                'categories' => $categories,
            ]);
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.adverts.add', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.adverts.add', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName1 = rand(1, 1000).time().'.'.$request->image1->extension();
        $request->image1->move(public_path('uploadedFiles'), $imageName1);

        $this->validate($request, [
            'tag' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        Advertisement::create([
            'tag' => $request->tag,
            'category' => $request->category,
            'desc' => $request->description,
            'image_1' =>  $imageName1,
            ]);

            return view("admin.articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ads = Advertisement::find($id);
        $articles = Article::where('category', '=', (int) $ads->category)->simplePaginate(3);
        //dd($articles);

        $otherArticles = Article::latest()->simplePaginate(10);
        $categories = Category::all();

        return view('layouts.ads.details', [
            'ads' => $ads,
            'articles' =>  $articles,
            'otherArticles' => $otherArticles,
            'categories' => $categories,
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
