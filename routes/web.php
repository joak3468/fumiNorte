<?php

use Illuminate\Support\Facades\Route;


Route::get( '/', 'HomeController@index' )->name( 'home' );
Route::get( 'presupuesto_online', 'HomeController@form' )->name( 'form' );
Route::post( 'send_presupuesto', 'HomeController@send_presupuesto' )->name( 'presupuesto_online' );
