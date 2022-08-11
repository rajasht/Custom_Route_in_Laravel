<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Customer routes for your application. These
| routes are loaded by the RouteServiceProvider.
|
*/

Route::get('/',function(){
    return view('Customer');
});