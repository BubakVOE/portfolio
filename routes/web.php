<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Nav\HomeController;
use App\Http\Controllers\Nav\NewsController;
use App\Http\Controllers\Nav\ChampionsController;
use App\Http\Controllers\other\SkinsController;

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

// hlávní stránka
    route::get('/', [HomeController::class, 'index'])->name('domu');

// champions
    route::get('/champions', [ChampionsController::class, 'index'])->name('champions');
    route::get('/champion/{champion}', [ChampionsController::class, 'show'])->name('champions-show');
    route::get('/champions/free-rotations', [ChampionsController::class, 'freeRotation'])->name('freeRotations');
    route::get('/champions/newbie-rotations', [ChampionsController::class, 'newbieRotation'])->name('newbieRotation');

// skins
    route::get('/skins', [SkinsController::class, 'index'])->name('skins');
    route::get('/skins/{champion}', [SkinsController::class, 'show'])->name('skins-show');

//patch notes
    route::get('/news', [NewsController::class,'index'])->name('news');
    Route::get('/news/lolko', [NewsController::class, 'lolko'])->name('newsLolko');
    Route::get('/news/web', [NewsController::class, 'web'])->name('newsWeb');





