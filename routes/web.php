<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product_Controller;
use App\Http\Controllers\Users_Controller;
use App\Http\Controllers\Order_Controller;

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

//Products Route

Route::get('/',[Product_Controller::class, 'index']);

Route::post('/save',[Product_Controller::class, 'saveProduct']);

Route::get('/editproduct/{id}',[Product_Controller::class, 'editProduct']);

Route::post('/updateproduct',[Product_Controller::class, 'updateProduct']);

Route::get('/deleteproduct/{id}',[Product_Controller::class, 'deleteProduct']);


//Users Route
Route::get('/users',[Users_Controller::class, 'users']);

Route::post('/saveuser',[Users_Controller::class, 'saveUser']);

Route::get('/edituser/{id}',[Users_Controller::class, 'editUser']);

Route::post('/updateuser',[Users_Controller::class, 'updateUser']);

Route::get('/deleteuser/{id}',[Users_Controller::class, 'deleteUser']);



//Orders Route
Route::get('/orders',[Order_Controller::class, 'orders']);