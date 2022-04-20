<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\customer;
use App\Http\Controllers\customerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route :: get('lists',[customerController::class,'show']);




Route :: get('addcustomer',[customerController::class,'addcustomer']);
Route :: post('add_data',[customerController::class,'save']);

Route :: get('edit/{id}',[customerController::class,'edit']);
Route :: post('update',[customerController::class,'update'])->name('update');

Route :: get('delete/{id}',[customerController::class,'delete']);


