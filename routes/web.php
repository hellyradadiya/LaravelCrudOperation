<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

Route::get('showdata',[CrudController::class,'index']);
Route::get('adddata',[CrudController::class,'addCustomer']);
Route::post('savedata',[CrudController::class,'saveCustomer']);
Route::get('deletedata/{id}',[CrudController::class,'deleteCustomer']);
Route::get('editdata/{id}',[CrudController::class,'editCustomer']);
Route::post('updatedata/{id}',[CrudController::class,'updateCustomer']);