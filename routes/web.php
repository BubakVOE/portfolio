<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//web
use App\Http\Controllers\Web\UpdateController;
use App\Http\Controllers\Web\HomeController;

//admin

//user
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\SummonerController;


//riot
use App\Http\Controllers\Riot\ChampionsController;
use App\Http\Controllers\Riot\SkinsController;


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
    route::get('/champion/{id}', [ChampionsController::class, 'show'])->name('champions-show');
    route::get('/champions/free-rotations', [ChampionsController::class, 'freeRotation'])->name('freeRotations');
    route::get('/champions/newbie-rotations', [ChampionsController::class, 'newbieRotation'])->name('newbieRotation');


// Skins
    route::get('/skins', [SkinsController::class, 'index'])->name('skins');
    route::get('/skins/{champion}', [SkinsController::class, 'show'])->name('skins-show');

// Profile data
    route::get('/account/{username}', [AccountController::class, 'index'])->name('account-index');
    route::get('/account/{username}/edit', [AccountController::class, 'edit'])->name('account-edit');
    route::post('/account/store', [AccountController::class, 'store'])->name('account-store');
    route::put('/account/{id}/update', [AccountController::class, 'update'])->name('account-update');
    route::delete('/account/{id}/delete', [AccountController::class, 'delete'])->name('account-delete');



// Summoner lolko
    route::get('/summoner', [SummonerController::class, 'index'])->name('summoner');
    route::get('/summoner/{username}', [SummonerController::class, 'show'])->name('summoner-show');
    route::get('/summoner/{username}/{matchHistory}', [SummonerController::class, 'matchHistory'])->name('summoner-matchHistory');

    // route::put('/summoner/{id}/update', [SummonerController::class, 'update'])->name('summoner-update');



// patch notes
    route::get('/news', [UpdateController::class,'index'])->name('news');
    Route::get('/news/lolko', [UpdateController::class, 'lolko'])->name('newsLolko');
    Route::get('/news/web', [UpdateController::class, 'web'])->name('newsWeb');





