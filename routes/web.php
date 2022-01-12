<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdvertisementsController;
use App\Http\Controllers\ArticlesController;

Route::middleware(['auth'])->group(function(){
    Route::post('ads', AdvertisementsController::class);

    Route::get('management', [PageController::class, 'admin_manage'])->name("management");
    Route::get('management.articles.add', [ArticlesController::class, 'create'])->name("management.articles.add");
});
Route::get('ads', AdvertisementsController::class);
Route::resource('ads', AdvertisementsController::class);

Route::get('', PageController::class);
Route::get('index', PageController::class)->name("index");

Route::get('user.authenticate', UserController::class)->name('user.authenticate');
Route::get('user.logout', [UserController::class, 'logout'])->name('user.logout');

Route::post('user.add', [UserController::class, 'store'])->name('user.add');
Route::post('user.login', [UserController::class, 'login'])->name('user.login');
Route::post('login', [UserController::class, 'login'])->name('login');
