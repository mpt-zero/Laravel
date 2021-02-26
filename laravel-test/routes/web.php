<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CustomAuthMiddleware;
use App\Http\Middleware\CustomGuestMiddleware;


Route::middleware("custom-auth")->group(function(){
    Route::
    prefix("products")->
    name("products.")->
    group(function(){
    Route::get("/","\App\Http\Controllers\ProductController@index")->name("index")->middleware("custom-auth");
    Route::get("/edit","\App\Http\Controllers\ProductController@edit")->name("edit")->middleware("custom-auth");
    Route::post("/update","\App\Http\Controllers\ProductController@update")->name("update")->middleware("custom-auth");
    Route::post("/delete","\App\Http\Controllers\ProductController@delete")->name("delete")->middleware("custom-auth");
    Route::post("/store","\App\Http\Controllers\ProductController@store")->name("store")->middleware("custom-auth");

});
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Route::prefix("custom")->
name("custom.")->
group(function(){
Route::post("/login",[AuthController ::class,"login"])->name("login")->middleware("custom-guest");
Route::post("/register",[AuthController ::class,"register"])->name("register")->middleware("custom-guest");
Route::post("/logout",[AuthController ::class,"logout"])->name("logout")->middleware("custom-auth");
});




Auth::routes();
