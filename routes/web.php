<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ViewController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::view('/cake', 'Cake');
Route::view('/outfit', 'outfit');
Route::view('/venue', 'venue');
Route::view('/food', 'food');

Route::post('/cake', [FormController::class, 'fillcake']);;
Route::get('/cakeview', [ViewController::class, 'cakeview']);

Route::post('/outfits', [FormController::class, 'filloutfit']);;
Route::get('/outfitview', [ViewController::class, 'outfitview']);

Route::post('/venue', [FormController::class, 'fillvenue']);;
Route::get('/venueview', [ViewController::class, 'venueview']);

Route::post('/food', [FormController::class, 'fillfoodbeverages']);
Route::get('/foodview', [ViewController::class, 'foodview']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::view('profile', 'profile')->name('profile');
Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');


    //Route::any('/cake', [\App\Http\Controllers\FormController::class, 'fillcake'])->name('FormController.fillcake');
});