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

Route::get('/', function () {
    return view('welcome');
})->name("index");
Route::get("/explore",function (){
    return view("client.explore");
})->name("client.explore");
Route::get("/chat",function (){
    return view("client.chat");
})->name("client.chat");
Route::get("/trending",function (){
    return view("client.trending");
})->name("client.trending");
Route::middleware([])->prefix("auth")->group(function (){
    Route::get("/login",function (){
        return view("auth.login");
    })->name("auth.login");
    Route::get("/register",function (){
        return view("auth.register");
    })->name("auth.register");
});
