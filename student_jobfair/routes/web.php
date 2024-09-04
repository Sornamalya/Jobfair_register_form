<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudController;
use App\Models\student_primary_info;
use App\Models\student_secondary_info;



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
    return view('register');
});

Route::get('/register',[StudController::class,'register'])->name("register");

Route::post('/store',[StudController::class,'store'])->name("store");

Route::get('/index',[StudController::class,'index'])->name("index");

Route::get('/view/{id}',[StudController::class,'view'])->name("view");

Route::get('/edit/{id}',[StudController::class,'edit'])->name("edit");

Route::get('/delete/{id}',[StudController::class,'delete'])->name("delete");

Route::put('/update/{id}',[StudController::class,'update'])->name("update");

Route::get('/login',[StudController::class,'login'])->name("login");

Route::post('/loginpost',[StudController::class,'loginpost'])->name("loginpost");

Route::get('/home',[StudController ::class,'home'])->name("home");

Route::get('/sample', function () {
    return view('sample');

});

Route::get('/show',[StudController::class,'register'])->name("show");