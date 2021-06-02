<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalController;
use App\Http\Controllers\UrlController;


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



// for the calculator assignment

Route::get('/calculator', function(){
    
    return view('calculator');
});

Route::post('calcon',[CalController::class,'mathOp']);



// for the url shortener

Route::get('/short', function() {

    return view('url.short');
});

Route::post('/short',[UrlController::class,'short']);
Route::get('/short/{link}',[UrlController::class,'shortlink']);


