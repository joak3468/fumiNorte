<?php
use Illuminate\Support\Facades\Route;

Route::get( '/', 'HomeController@index' )->name( 'home' );
Route::get( 'presupuesto_online', 'HomeController@form' )->name( 'form' );
Route::post( 'send_presupuesto', 'HomeController@send_presupuesto' )->name( 'presupuesto_online' );
Route::get('/clear_all', function() {
    Artisan::call('cache:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');
return "Cleared!";
});