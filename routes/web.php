<?php
use Illuminate\Support\Facades\Route;
use App\Mail\Notification;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\BasketsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AdvertisementsController;
use App\Http\Controllers\admin\ArticleController as AdminArticleController;
use App\Http\Controllers\admin\PurchasesController as AdminPurchasesController;


Route::middleware(['auth'])->group(function(){
    Route::post('ads', AdvertisementsController::class);

    Route::get('backoffice', [PageController::class, 'admin_manage'])->name("management");
    Route::resource('backoffice/adminArticle', AdminArticleController::class);
    Route::get('backoffice/articles/add', [ArticlesController::class, 'create'])->name("management.articles.add");
    Route::post('backoffice/articles/add', [ArticlesController::class, 'store'])->name("management.articles.add");
    Route::get('backoffice/articles/msgArt', [PageController::class, 'go_to_msgArt'])->name("management.articles.msgArt");
    Route::get('backoffice/articles/get', ArticlesController::class)->name("management.articles.get");
    Route::get('backoffice/articles/index', [ArticlesController::class, 'index'])->name("management.articles.index");
    Route::get('backoffice/adverts/add', [AdvertisementsController::class, 'create'])->name("management.adverts.add");
    Route::post('backoffice/adverts/add', [AdvertisementsController::class, 'store'])->name("management.adverts.add");
    Route::post('backoffice/purchase', [AdminPurchasesController::class, 'update'])->name("management.purchase");

    Route::get('backoffice/user/get', [UserController::class, 'index'])->name("management.user/get");
    Route::get('backoffice/user/index', [UserController::class, 'getUsers'])->name("management.user/index");

    Route::get('feedback', FeedBackController::class)->name("feedback");

});

Route::get('/', PageController::class)->name("/");
Route::get('/ads', AdvertisementsController::class);
Route::resource('ads', AdvertisementsController::class);

Route::resource('/article', ArticlesController::class);
Route::post("/article.buy", [ArticlesController::class, 'buy'])->name("article.buy");

Route::get('/home', PageController::class)->name("home");

Route::get('/user/authenticate', UserController::class)->name('user.authenticate');
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user.confirmed', [PageController::class, 'confirm_user'])->name('user.confirmed');

Route::post('/user.add', [UserController::class, 'store'])->name('user.add');
Route::post('/user.login', [UserController::class, 'login'])->name('user.login');

//Route::get('basket.add', [ArticlesController::class, 'add_to_basket'])->name('basket.add');
//Route::post('basket/add/{name}', [BasketsController::class, 'store'])->name('basket.add');

Route::post('/basket/add', [BasketsController::class, 'store'])->name('basket.add');
Route::get('/basket/show', [BasketsController::class, 'index'])->name('basket.show');
Route::get('/basket/purchases', [PurchasesController::class, 'index'])->name('basket.purchases');

Route::resource('purchase', PurchasesController::class);

Route::post('/search/index', [SearchController::class, 'index'])->name('search.index');
Route::get('/search/index', [SearchController::class, 'index'])->name('search.index');

Route::post('feedback/post', [FeedBackController::class, 'store'])->name("feedback.post");

/* management authentifications */
Route::get('/login', UserController::class)->name('login');

Route::get('/getTerminal', [TerminalController::class, 'index'])->name('getTerminal');

Route::get("send-mail", function(){
    return new Notification("Philippe Mbambi", "philippembambi413@gmail.com", "hello world");
});

Route::get("transfert-mail", [MailController::class, 'create'])->name("transfert-mail");
Route::post("new-mail", [NotificationController::class, 'store'])->name("new-mail");
# Send mail to the client
Route::get("/send-signupMail", [MailController::class, 'signUp'])->name("send-signupMail");


Route::get('payment', [PaymentController::class, 'index']);
Route::post('charge', [PaymentController::class, 'charge']);
Route::get('paymentsuccess', [PaymentController::class, 'payment_success']);
Route::get('paymenterror', [PaymentController::class, 'payment_error']);

Route::get('auth/facebook', [SocialController::class, 'redirectFacebook']);
Route::get('auth/facebook/callback', [SocialController::class, 'callbackFacebook']);

Route::get('test', function(){
    $slug = Str::slug("Hello world, où pourrais-je trouver à manger");
    return $slug;
});

Route::get('/{order?}', [
    'name' => 'PayPal Express Checkout',
    'as' => 'app.home',
    'uses' => 'PayPalController@form',
]);

Route::post('/checkout/payment/{order}/paypal', [
    'name' => 'PayPal Express Checkout',
    'as' => 'checkout.payment.paypal',
    'uses' => 'PayPalController@checkout',
]);

Route::get('/paypal/checkout/{order}/completed', [
    'name' => 'PayPal Express Checkout',
    'as' => 'paypal.checkout.completed',
    'uses' => 'PayPalController@completed',
]);

Route::get('/paypal/checkout/{order}/cancelled', [
    'name' => 'PayPal Express Checkout',
    'as' => 'paypal.checkout.cancelled',
    'uses' => 'PayPalController@cancelled',
]);

Route::post('/webhook/paypal/{order?}/{env?}', [
    'name' => 'PayPal Express IPN',
    'as' => 'webhook.paypal.ipn',
    'uses' => 'PayPalController@webhook',
]);
