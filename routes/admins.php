<?php

use App\Http\Controllers\Admins\AdminsController;
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


// Routing For Admins 
Route::namespace('Admins')->group(function(){
     Route::get('dashboard',[AdminsController::class,'home_dashboard']);
     Route::get('upload_products',[AdminsController::class,'add_products']);
     Route::post('upload',[AdminsController::class,'upload_product']);
     Route::get('manage_products',[AdminsController::class,'manage_products']);
     Route::get('manage_products_view/{product_id}',[AdminsController::class,'control_management_products']);

     Route::get('dashboard',[AdminsController::class,'home_dashboard']);
     Route::get('delete_product/{product_id}',[AdminsController::class,'delete_product']);

     Route::get('edit_product/{product_id}',[AdminsController::class,'edit_product']);

});
