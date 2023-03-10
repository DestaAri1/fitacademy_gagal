<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
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

// routing home ke halaman landingPage
Route::get('/', function () {
    return view('landingPage.landingPage');
});

// routing ke halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// routing halaman profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routing ke halaman landing page perusahaan, content creator, netizen
Route::view('/perusahaan', 'landingPage.landingPerusahaan');
Route::view('/contentcreator', 'landingPage.landingContentCreator');
Route::view('/netizen', 'landingPage.landingNetizen');

// save email to database and send e-book to email
Route::post('/perusahaan/mail', [RequestController::class, 'addRequestPerusahaan'])->name('email');

require __DIR__.'/auth.php';
