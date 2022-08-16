<?php

use Illuminate\Support\Facades\Route;
use Kzt\Greeting\Greeting;

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
});


Route::get('/greeting', function() {
    $greet = new Greeting();
    return $greet->greeting();
});