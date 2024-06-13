<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.about',[
        "title" => "about"
    ]);
});
    // Portofolio HomeControler
    Route::resource('/rating', PostController::class);
    Route::get('/post', [PostController::class, 'post']);
    Route::controller(HomeController::class)->group(function(){
        Route::get('/about', 'about');
        Route::get('/resume', 'resume');
        Route::get('/portofolio', 'portofolio');
        Route::get('/blog', 'blog');
    });

    




