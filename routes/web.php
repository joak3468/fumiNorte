<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get( '/',[HomeController::class, 'index'] )->name( 'home' );
Route::get( 'presupuesto_online',[HomeController::class, 'form'] )->name( 'form' );
Route::post( 'send_presupuesto', [HomeController::class, 'send_presupuesto'] )->name( 'presupuesto_online' );
include 'admin.php';

