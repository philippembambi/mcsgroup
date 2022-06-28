<?php
namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Purchase;
use App\Models\Basket;
use Illuminate\Http\Request;
use DB;
use Flashy;

class PageController extends Controller
{
    public function __invoke()
    {
        $rand = rand(1, 4);

        switch ($rand) {
            case 1:
                $someArticles = Article::latest()->simplePaginate(3);
                $otherArticles = Article::limit(3)->simplePaginate(3);
                $articles = Article::orderBy("id", 'DESC')->get();
                $ads = Advertisement::orderBy("id", 'DESC')->get();

                $randInt = rand(1, 2);
                $randomOrdi = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt)->limit(8)->get();

                $randInt2 = rand(3, 5);
                $randomComputer = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt2)->limit(8)->get();
                break;
            case 2:
                $someArticles = Article::latest()->simplePaginate(3);
                $otherArticles = Article::limit(3)->simplePaginate(3);
                $articles = Article::orderBy("id", 'DESC')->get();
                $ads = Advertisement::orderBy("id", 'ASC')->get();

                $randInt = rand(1, 2);
                $randomOrdi = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt)->limit(8)->get();

                $randInt2 = rand(3, 5);
                $randomComputer = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt2)->limit(8)->get();
                break;
            case 3:
                $someArticles = Article::latest()->simplePaginate(3);
                $otherArticles = Article::limit(3)->simplePaginate(3);
                $articles = Article::orderBy("id", 'DESC')->get();
                $ads = Advertisement::orderBy("tag", 'ASC')->get();

                $randInt = rand(1, 2);
                $randomOrdi = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt)->limit(8)->get();

                $randInt2 = rand(3, 5);
                $randomComputer = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt2)->limit(8)->get();
                break;
            case 4:
                $someArticles = Article::latest()->simplePaginate(3);
                $otherArticles = Article::limit(3)->simplePaginate(3);
                $articles = Article::orderBy("id", 'DESC')->get();
                $ads = Advertisement::orderBy("tag", 'DESC')->get();

                $randInt = rand(1, 2);
                $randomOrdi = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt)->limit(8)->get();

                $randInt2 = rand(3, 5);
                $randomComputer = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt2)->limit(8)->get();
                break;
        }
        // 				$results = Item::where('title', 'like', '%' . $request->get("search") .'%')->paginate(10);
//dd($randomComputer);
        $arts = Article::where("id_ordi", "=", 1)->orWhere("id_ordi", "=", 5)->orderBy("id", 'ASC')->paginate(8);
        return view('home', [
            'ads' => $ads,
            'articles' => $articles,
            'someArticles' => $someArticles,
            'otherArticles' => $otherArticles,
            'randomOrdi' => $randomOrdi,
            'randomComputer' => $randomComputer,
            'arts' => $arts
        ]);
    }

    public function index()
    {
        $someArticles = Article::latest()->limit(3);
        $otherArticles = Article::limit(3)->paginate(3);

                $randInt = rand(1, 2);
                $randomOrdi = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt)->limit(8);

                $randInt2 = rand(3, 5);
                $randomComputer = Article::leftJoin("ordinateur", "ordinateur.id_ordi", '=', 'articles.id_ordi')->where('articles.id_ordi', '=', $randInt2)->limit(8);

        $articles = Article::orderBy("id", 'DESC')->get();
        $ads = Advertisement::all();
        return view('home', [
            'ads' => $ads,
            'articles' => $articles,
            'someArticles' => $someArticles,
            'otherArticles' => $otherArticles,
            'randomOrdi' => $randomOrdi,
            'randomComputer' => $randomComputer,
            'arts' => $arts
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
            "z.dgemmanuelzwabudi@gmail.com"
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
            Flashy::error("Vous n'avez pas l'autorisation d'acceder à l'espace admin !");
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
