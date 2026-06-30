<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SubscriberController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ])->group(
        function () {


            Route::prefix('front')->name('front.')->controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'store')->name('contact.store');
    Route::get('/services', 'service')->name('service');
    Route::post('/subscriber', 'subscriber')->name('subscriber.store');
});

Route::prefix('admin')->name('admin.')->group(function (){
    require __DIR__.'/auth.php';

    Route::middleware('auth')->group(function (){
        Route::get('index',[AdminController::class,'index'])->name('index');
        Route::resource('services', ServicesController::class);
        Route::resource('features', FeaturesController::class);
        Route::resource('messages', MessageController::class)->only('index', 'show','destroy');
                Route::resource('subscribers', SubscriberController::class)->only('index', 'destroy');
                Route::resource('settings', SettingController::class)->only('index','update');
            });
});

});


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__.'/auth.php';
 