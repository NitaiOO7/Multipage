<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/name', [EmployeeController::class,'name'])->name('name');
Route::post('/name', [EmployeeController::class,'createname'])->name('name');
Route::get('/email', [EmployeeController::class,'email'])->name('email');
Route::post('/email', [EmployeeController::class,'createemail'])->name('email');
Route::get('/number', [EmployeeController::class,'phonenumber'])->name('number');
Route::post('/number', [EmployeeController::class,'createphonenumber'])->name('number');
Route::get('/password', [EmployeeController::class,'password'])->name('password');
Route::post('/password', [EmployeeController::class,'createpassword'])->name('password');
//Route::get('/store', [EmployeeController::class,'store'])->name('store');
Route::get('/preview', [EmployeeController::class,'show'])->name('preview'); 
Route::post('/preview', [EmployeeController::class,'store'])->name('preview');
Route::get('/view', [EmployeeController::class,'viewdata'])->name('view');