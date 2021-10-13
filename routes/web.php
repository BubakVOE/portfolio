<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Nav\HomeController;
use App\Http\Controllers\Nav\NewsController;


use App\Http\Controllers\nav\ProfileController;
use App\Http\Controllers\other\SkinsController;
use App\Http\Controllers\Nav\ChampionsController;
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

// Profile data
    route::get('/profile/{username}', [ProfileController::class, 'index'])->name('profile-index');
    route::get('/profile/{username}/edit', [ProfileController::class, 'edit'])->name('profile-edit');



// Summoner lolko
    route::get('/summoner', [SummonerController::class, 'index'])->name('summoner');
    route::get('/summoner/{username}', [SummonerController::class, 'show'])->name('summoner-show');

    route::delete('/summoner/{id}/delete', [SummonerController::class, 'delete'])->name('summoner-delete');
    route::put('/summoner/{id}/update', [SummonerController::class, 'update'])->name('summoner-update');
    
    route::post('/summoner/store', [SummonerController::class, 'store'])->name('summoner-store');


// patch notes
    route::get('/news', [NewsController::class,'index'])->name('news');
    Route::get('/news/lolko', [NewsController::class, 'lolko'])->name('newsLolko');
    Route::get('/news/web', [NewsController::class, 'web'])->name('newsWeb');





