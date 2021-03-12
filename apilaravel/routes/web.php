<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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


Route::get('/home', [DemoController::class,'index']);
Route::get('/all', [DemoController::class,'getall']);
Route::post('/insert', [DemoController::class,'insert']);
Route::get('/delete/{id}', [DemoController::class,'delete']);
Route::put('/update', [DemoController::class,'update']);
