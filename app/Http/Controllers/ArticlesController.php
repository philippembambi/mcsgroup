<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Purchase;
use DB;
use Flashy;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ArticlesController extends Controller
{
    public function __invoke()
    {
        $articles = Article::all();
        return view("admin.articles.articles", ['articles' => $articles]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.articles.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $ordinateur = DB::table("ordinateur")->get(['id_ordi', 'name']);
        return view("admin.articles.add", ['categories' => $categories, 'ordinateurs' => $ordinateur]);
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

        $imageName2 = rand(1, 1000).time().'.'.$request->image2->extension();
        $request->image2->move(public_path('uploadedFiles'), $imageName2);

        $imageName3 = rand(1, 1000).time().'.'.$request->image3->extension();
        $request->image3->move(public_path('uploadedFiles'), $imageName3);

        $this->validate($request, [
            'label' => 'required|max:255',
            'description' => 'required'
        ]);

        Article::create([
            'tag' => $request->label,
            'category' => $request->category,
            'price' => $request->price,
            'solde_price' => $request->soldprice,
            'desc'=> $request->description,
            'nbre_exemplaire'=> $request->itemNumber,
            'picture_1' =>  $imageName1,
            'picture_2' =>  $imageName2,
            'picture_3' =>  $imageName3,
            'disk' => $request->disk,
            'pouce' => $request->pouce,
            'ram' => $request->ram,
            'processor' => $request->processeur,
            'id_ordi' => $request->MarqueOrdinateur
            ]);

            // $results = Item::where('title', 'like', "%{$term}%")->paginate(10);
            //$results = Article::where('tag', 'like', "%{$request->label}%")->get('tag');

            Flashy::primary("Vous venez d'ajouter un nouveau produit !");
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
        $article = Article::find($id);

        return view("layouts.articles.show", [
            'article' => $article,
        ]);
    }

    public function categorize($id)
    {
        $category = Category::find($id);
        $articles = Article::where('category', '=', $id)->simplePaginate(12);
        return view("layouts.articles.categorized", [
            'articles' => $articles,
            'category' => $category
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function buy(Request $request)
    {
        $total_price = $request->qte * $request->prixUnitaire;
        $code = substr(md5(time()), 0, 10);
        $mcs_adresses = DB::table("mcs_adresses")->get();
        $article_details = Article::where("id", "=", $request->articleId)->get();

        Purchase::create([
            'quantity' => $request->qte,
            'total_price' => $total_price,
            'delivery_mode' => $request->modeLivraison,
            'payment_mode' => $request->modePaiement,
            'user_id'=> auth()->user()->id,
            'article_id'=> $request->articleId,
            'code_purchase' => $code
            ]);
        $content = "Vous avez commandé  ".$request->qte." ".$article_details[0]->tag." (N° ".$code.") pour ".$total_price." $"." le ".date("d-m-Y à H:m", time());
        $qrcode = QrCode::size(200)->format('svg')->generate($content, 'qr-codes/'.$code.'.svg');

        Flashy::primary("Votre commande est en cours de validation !");
        return view("layouts.articles.purchasing", [
            'article' => $request,
            'code' => $code,
            'adresses' => $mcs_adresses
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function add_to_basket()
    {
        return response()->json(['success'=> "hello"]);
    }

    public function fill_basket()
    {

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
