<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

/*Route::get('index',function()
{
	return view('view');
});
*/
Route::get('view',[StudentController::class,'show']);

Route::get('create',[StudentController::class,'create']);

Route::post('submit',[StudentController::class,'store']);

Route::get('delete/{id}',[StudentController::class,'destroy']);

Route::get('edit/{id}',[StudentController::class,'edit']);

Route::post('update/{id}',[StudentController::class,'update']);