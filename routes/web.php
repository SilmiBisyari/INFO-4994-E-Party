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

Route::get('/booking', function(){

    return view('customer/booking');    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*vendor*/
Route::view('/cake', '/vendor/Cake');
Route::view('/outfit', '/vendor/outfit');
Route::view('/venue', '/vendor/venue');
Route::view('/food', '/vendor/food');

Route::post('/cake', [FormController::class, 'fillcake']);;
Route::get('/vendor/cakeview', [ViewController::class, 'cakeview']);

Route::post('/outfits', [FormController::class, 'filloutfit']);;
Route::get('/vendor/outfitview', [ViewController::class, 'outfitview']);

Route::post('/venues', [FormController::class, 'fillvenue']);;
Route::get('/vendor/venueview', [ViewController::class, 'venueview']);

Route::post('/food', [FormController::class, 'fillfoodbeverages']);
Route::get('/vendor/foodview', [ViewController::class, 'foodview']);

Route::get('/vendor/vendororder', [ViewController::class, 'allvendorlistorder']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::view('profile', 'profile')->name('profile');
Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');

Route::view('dashboardvendor', '/vendor/dashboardvendor')->name('dashboardvendor');
    //Route::any('/cake', [\App\Http\Controllers\FormController::class, 'fillcake'])->name('FormController.fillcake');


//customer 
Route::post('/booking', [FormController::class, 'booking']);
Route::get('/booking', [FormController::class, 'bookingselection']);

Route::get('/customer/totalcakeview', [ViewController::class, 'totalcakeview']);
Route::get('/customer/totaloutfitview', [ViewController::class, 'totaloutfitview']);
Route::get('/customer/totalvenueview', [ViewController::class, 'totalvenueview']);
Route::get('/customer/totalfoodview', [ViewController::class, 'totalfoodview']);

Route::get('/customer/bookingview', [ViewController::class, 'bookingview']);
Route::get('/customer/delete/{idbooking}',[ViewController::class, 'delete']);





//Route::get('/customer/totalcakeview', [ViewController::class, 'cakeselection']);
});


//Route::get('/customer/totalcakeview', [FormController::class, 'cakeselection']);