<?php

use App\Http\Controllers\DatasetController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\WebController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    //Dashboard
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    //Games
    Route::get('/games', [GameController::class, 'index'])->name('game.index');
    Route::get('/games/{$game}', [GameController::class, 'show'])->name('game.show');

    //Datasets
    Route::get('/datasets', [DatasetController::class, 'index'])->name('dataset.index');
    Route::get('/datasets/{$dataset}', [DatasetController::class, 'show'])->name('dataset.show');

    //About
    Route::inertia('/about', 'About')->name('about');

    //Locales
    Route::get('/{locale}', [WebController::class, 'swapLocale'])->name('locale');
});

