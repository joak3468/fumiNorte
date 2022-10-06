<?php

use Illuminate\Support\Facades\Route;

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
Route::get( '/', 'HomeController@index' )->name( 'home' );
Route::get( 'presupuesto_online', 'HomeController@form' )->name( 'form' );
Route::post( 'send_presupuesto', 'HomeController@send_presupuesto' )->name( 'presupuesto_online' );
Route::get('/clear_all', function() {
Artisan::call('cache:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');
return "Cleared!";
});

Route::prefix('admin')->group( function() {

    Route::get( '/', 'AdminHomeController@index')->middleware(['auth', 'verified'])->name('home');

    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    require __DIR__.'/auth.php';
});
