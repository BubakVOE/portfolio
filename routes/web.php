<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Nav\HomeController;
use App\Http\Controllers\Nav\NewsController;
use App\Http\Controllers\Nav\UsersController;
use App\Http\Controllers\Nav\ChampionsController;
use App\Http\Controllers\Nav\ProfileController;


use App\Http\Controllers\other\SkinsController;
use App\Http\Controllers\other\SummonerController;

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

// Hlávní stránka
    route::get('/', [HomeController::class, 'index'])->name('domu');

// Champions
    route::get('/champions', [ChampionsController::class, 'index'])->name('champions');
    route::get('/champion/{champion}', [ChampionsController::class, 'show'])->name('champions-show');
    route::get('/champions/free-rotations', [ChampionsController::class, 'freeRotation'])->name('freeRotations');
    route::get('/champions/newbie-rotations', [ChampionsController::class, 'newbieRotation'])->name('newbieRotation');

// Skins
    route::get('/skins', [SkinsController::class, 'index'])->name('skins');
    route::get('/skins/{champion}', [SkinsController::class, 'show'])->name('skins-show');

// User data
    route::get('/user/{username}', [UsersController::class, 'index'])->name('user-index');
    route::get('/user/{username}/edit', [UsersController::class, 'show'])->name('user-show');
    route::post('/user/update', [UsersController::class, 'update'])->name('user-update');
    route::post('/user/store', [UsersController::class, 'store']);


// Summoner lolko
    route::get('/summoners', [SummonerController::class, 'index'])->name('summoner');
    route::get('/summoner/{username}', [SummonerController::class, 'show'])->name('summoner-show');

// patch notes
    route::get('/news', [NewsController::class,'index'])->name('news');
    Route::get('/news/lolko', [NewsController::class, 'lolko'])->name('newsLolko');
    Route::get('/news/web', [NewsController::class, 'web'])->name('newsWeb');





