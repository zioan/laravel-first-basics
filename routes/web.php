<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/sample',[TestController::class, "sample"]);

// Route::get('/sample',[TestController::class, "sample"] )->middleware("api");



// Route::group(["middleware" => ["mymiddleware", "second_middleware", "third"]], function(){
Route::group(["middleware" => ["mymiddleware"]], function(){
    Route::get('sample',[TestController::class, "sample"]);
    Route::get('/example1',[TestController::class, "example1"]);
    Route::get('/example2',[TestController::class, "example2"]);
});



Route::prefix("admin")->group(function(){
    //...
    Route::get('sample',[TestController::class, "sample"]);
    Route::get('example1',[TestController::class, "example1"]);
    Route::get('example2',[TestController::class, "example2"]);
});
        // admin/sample
        // admin/example1
        // admin/example2

