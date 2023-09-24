<?php

use Illuminate\Support\Facades\Route;
use ArchnaKhiwaliya\FirstPackage\Facades\FirstPackage;
use ArchnaKhiwaliya\FirstPackage\Http\Controllers\HelloController;


// Route::namespace('ArchnaKhiwaliya\FirstPackage\Http\Controllers')->group(function(){
// 	Route::get('hello-route', 'HelloController@index');
// });
Route::get(config('first-package.route'), 'HelloController@index');