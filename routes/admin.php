<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::get( 'admin/login_admin_fumi',[LoginController::class,'show'] )->name( 'admin.login' );
Route::post( 'admin/login_admin_fumi',[LoginController::class,'login'] )->name( 'admin.login.post' );
/*
 
Route::group( [ 'namespace' => 'Admin', 'prefix' => 'admin/', 'as' => 'admin.' ], function() {
    
    //Route::post( 'login_admin_fumi', 'LoginController@login' )->name( 'login.post' );
    //Route::post( 'logout', 'Auth\LoginController@logout' )->name( 'logout' );
});

*/