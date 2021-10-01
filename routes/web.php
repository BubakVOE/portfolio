<?php

use App\Http\Controllers\ChampionsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SkinsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


route::get('/', [NavController::class, 'index'])->name('domu');

// champions
    route::get('/champions', [ChampionsController::class, 'index'])->name('champions');
    route::get('/champion/{champion}', [ChampionsController::class, 'show'])->name('champions-show');
    route::get('/champions/free-rotations', [ChampionsController::class, 'freeRotation'])->name('freeRotations');
    route::get('/champions/newbite-rotations', [ChampionsController::class, 'newbieRotation'])->name('newbieRotation');



    route::get('/champions/loading-skins', [SkinsController::class, 'loadingSkins'])->name('loadingSkins');
    route::get('/champions/art-skins', [SkinsController::class, 'artSkins'])->name('artSkins');

//patch notes
    route::get('/news', [NewsController::class,'index'])->name('news');
    Route::get('/news/lolko', [NewsController::class, 'lolko'])->name('newsLolko');
    Route::get('/news/web', [NewsController::class, 'web'])->name('newsWeb');




Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

