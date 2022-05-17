<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Must import this controller
use App\Http\Controllers\dummyApi;
use App\Models\Device;

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

//This one is usin static data
Route::get("/data",[dummyApi::class,'getData']);

//This one is useing mySql
Route::get("/list_data",function()
{
    return Device::all();
});

Route::get("/persons",[dummyApi::class,'getPerson']);

Route::get("/user",[dummyApi::class,'getUser']);

Route::get("/final",[dummyApi::class,'getFinalModel']);
