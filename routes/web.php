<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\QuarterbackController;
use App\Models\Quarterback;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
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
});

/* Dashboard */
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Quarterbacks */
Route::resource('quarterbacks', QuarterbackController::class)
    ->only(['index']);

/* Quarterback Dynamic ID Route */
Route::get('/quarterbacks/{quarterback:id}', function (Quarterback $quarterback) {
        return Inertia::render('Quarterback', [
            'quarterback' => $quarterback
        ]);
    })->name('quarterback.quarterback');

/* Chirps */
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'update'])
    ->middleware(['auth', 'verified']);


/* Route Middlewares */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
