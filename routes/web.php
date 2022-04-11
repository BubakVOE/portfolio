<?php

// login
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// admin
use App\Http\Controllers\Admin\DashboardController;


// user
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\SummonerController;

// web
use App\Http\Controllers\Web\UpdateController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ChampionsController;
use App\Http\Controllers\Web\RunesController;
use App\Http\Controllers\Web\SkinsController;

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

// users
// Hlávní stránka
route::get('/', [HomeController::class, 'index'])->name('domu');

// Champions
route::get('/champions', [ChampionsController::class, 'index'])->name('champions');
route::get('/champion/{champion:name}', [ChampionsController::class, 'show'])->name('champions-show');
route::get('/champions/weekly-rotations', [ChampionsController::class, 'weeklyRotations'])->name('weeklyRotations');
route::get('/champions/newbie-rotations', [ChampionsController::class, 'newbieRotations'])->name('newbieRotations');

// Runes
route::get('/runes', [RunesController::class, 'index'])->name('runes');
route::get('/rune/{id}', [RunesController::class, 'show'])->name('runes-show');
route::get('/rune/{id}', [RunesController::class, 'show'])->name('runes-show');
route::get('/rune/{id}', [RunesController::class, 'show'])->name('runes-show');

// Skins
route::get('/skins', [SkinsController::class, 'index'])->name('skins');
route::get('/skin/{username}', [SkinsController::class, 'show'])->name('skins-show');

// Profile data
route::get('/account/{username}', [AccountController::class, 'index'])->name('account-index');
route::get('/account/{username}/edit', [AccountController::class, 'edit'])->name('account-edit');
route::post('/account/store', [AccountController::class, 'store'])->name('account-store');
route::put('/account/{id}/update', [AccountController::class, 'update'])->name('account-update');
route::delete('/account/{id}/delete', [AccountController::class, 'delete'])->name('account-delete');
//crypto
   //bitcoin -> eth
   //eth -> doge
// Summoner lolko
route::get('/summoner', [SummonerController::class, 'index'])->name('summoner');
route::get('/summoner/{username}', [SummonerController::class, 'show'])->name('summoner-show');
route::get('/summoner/{username}/{matchHistory}', [SummonerController::class, 'matchHistory'])->name('summoner-matchHistory');

Route::post('summoner/search/', [SearchController::class, 'search'])->name('search.summoner');

// route::put('/summoner/{id}/update', [SummonerController::class, 'update'])->name('summoner-update');
// patch notes
route::get('/news', [UpdateController::class, 'index'])->name('news');
route::get('/news/lolko', [UpdateController::class, 'lolko'])->name('newsLolko');
route::get('/news/web', [UpdateController::class, 'web'])->name('newsWeb');

// isAdmin
Route::group(['middleware' => ['auth', 'admin']], function () {
    route::get('/dashboard', [DashboardController::class, 'index']);
});





