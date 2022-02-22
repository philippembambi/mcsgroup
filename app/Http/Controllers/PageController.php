<?php
namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Purchase;
use App\Models\Basket;
use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function __invoke()
    {
        // 				$results = Item::where('title', 'like', '%' . $request->get("search") .'%')->paginate(10);

        $someArticles = Article::latest()->simplePaginate(3);
        $otherArticles = Article::limit(3)->simplePaginate(3);

        $articles = Article::all();
        $ads = Advertisement::orderBy("id", 'DESC')->get();
        return view('home', [
            'ads' => $ads,
            'articles' => $articles,
            'someArticles' => $someArticles,
            'otherArticles' => $otherArticles,
        ]);
    }

    public function index()
    {
        $someArticles = Article::latest()->limit(3);
        $otherArticles = Article::limit(3)->paginate(3);

        $articles = Article::all();
        $ads = Advertisement::all();
        return view('home', [
            'ads' => $ads,
            'articles' => $articles,
            'someArticles' => $someArticles,
            'otherArticles' => $otherArticles,
        ]);
    }
    public function admin_manage()
    {
        $purchases = DB::table('purchases')
        ->leftJoin('articles', 'purchases.article_id', '=', 'articles.id')
        ->leftJoin('users', 'users.id', '=', 'purchases.user_id')
        ->Where('purchases.state', '=', "Validé")
        ->get([
            'articles.tag', 'purchases.created_at AS date_cmd',
            'desc', 'picture_1', 'purchases.updated_at AS date_validation',
            'delivery_mode', 'payment_mode', 'total_price', 'quantity',
            'quantity'
            ]);

            $cmd = DB::table('purchases')
            ->leftJoin('articles', 'purchases.article_id', '=', 'articles.id')
            ->leftJoin('users', 'users.id', '=', 'purchases.user_id')
            ->Where('purchases.state', '=', "En attente")
            ->get([
                'articles.tag', 'purchases.created_at AS date_cmd',
                'desc', 'picture_1',
                'delivery_mode', 'payment_mode', 'total_price', 'quantity',
                'quantity', 'purchases.id AS purchase_id'
                ]);

            $basket = DB::table('baskets')
            ->leftJoin('articles', 'baskets.article_id', '=', 'articles.id')
            ->leftJoin('users', 'users.id', '=', 'baskets.user_id')
            ->get([
                'articles.tag', 'baskets.created_at AS date_panier',
                'desc', 'picture_1', 'price', 'users.fullname', 'users.phone_number', 'users.email'
                ]);
       // dd($purchases);

        $usermail = auth()->user()->email;
        $privatemails = [
            "philippembambi413@gmail.com",
            "Costa@gmail.com"
        ];

        if(in_array($usermail, $privatemails)){
            return view('admin.index', [
                'purchases' => $purchases,
                'basket' => $basket,
                'cmd' => $cmd
            ]);
        }

        else{
            $towns_and_countries = DB::table('towns')
            ->leftJoin('countries', 'towns.country_id', '=', 'countries.id')
            ->orderBy('towns.country_id')
            ->get();

            return view('user.authentications', ['towns_and_countries' => $towns_and_countries]);
        }
    }

    public function confirm_user()
    {
        return view('auth_confirmed');
    }

    public function go_to_msgArt()
    {
        return view('admin.articles.msgArt');
    }
}
