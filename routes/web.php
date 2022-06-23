<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudApplication;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[CrudApplication::class,'home']);
Route::get('/view-employee',[CrudApplication::class,'view_employee']);
Route::get('/view-company',[CrudApplication::class,'view_company']);
Route::get('/add-employee',[CrudApplication::class,'add_employee_form']);
Route::post('/add-employee',[CrudApplication::class,'add_employee']);
Route::get('/edit-employee/{id}',[CrudApplication::class,'edit_employee']);
Route::post('/update-employee/{id}',[CrudApplication::class,'update_employee']);
Route::get('/delete-employee/{id}',[CrudApplication::class,'delete_employee']);


Route::get('/add-company',[CrudApplication::class,'add_company_form']);
Route::post('/add-company',[CrudApplication::class,'add_company']);
Route::get('/edit-company/{id}',[CrudApplication::class,'edit_company']);
Route::post('/update-company/{id}',[CrudApplication::class,'update_company']);
Route::get('/delete-company/{id}',[CrudApplication::class,'delete_company']);
