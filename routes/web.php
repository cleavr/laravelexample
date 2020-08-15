<?php

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
    \Illuminate\Support\Facades\Log::log("this is a log message woot");
    \Illuminate\Support\Facades\Log::warning("this is a very cool warning message yayyy");

    return view('welcome')->withName(env('NAME'));
});
