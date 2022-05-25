<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\Departments\DepartmentsController;

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

// Routing For Home Page
Route::get('/',[ProductController::class,'getAllProducts']);

// Routing For Products Detalis 
Route::get('show_details/{id}/{products_title}',[ProductController::class,'products_show_details']);





// Route::namespace('/')->group(function(){
//     Route::get('/',[ProductController::class,'getAllProducts']);
//     Route::get('/',[ProductController::class,'getAllAds']);
// });

Route::namespace('Departments')->group(function(){

    Route::get('body',[DepartmentsController::class,'body_func']);
    Route::get('gifts',[DepartmentsController::class,'gifts_func']);
    Route::get('hair',[DepartmentsController::class,'hair_func']);

    Route::get('makeup',[DepartmentsController::class,'makeup_func']);

});

