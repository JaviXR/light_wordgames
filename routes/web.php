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
    Route::resource('games', GameController::class);

    //Datasets
    Route::resource('datasets', DatasetController::class);

    //About
    Route::inertia('/about', 'About')->name('about');

    //Locales
    Route::get('/locale/{locale}', [WebController::class, 'swapLocale'])->name('locale');

    //Types
    Route::get('/types', [WebController::class, 'types'])->name('types');
});

