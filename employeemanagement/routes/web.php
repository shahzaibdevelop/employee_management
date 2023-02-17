<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EmployeeController::class,'getdes']);
Route::get('addemployee',[EmployeeController::class,'addemp']);
Route::post('/addData',[EmployeeController::class,'addData']);
Route::get('edit/{id}', [EmployeeController::class,'edit']);
Route::post('editData/{id}', [EmployeeController::class,'editData']);
Route::get('deleteData/{id}', [EmployeeController::class,'deleteData']);



