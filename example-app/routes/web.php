<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserForm;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("about",[AboutController::class,'about']);
Route::get('/',[PageController::class,'index'])->name("/");
Route::get('/about',[PageController::class,'about'])->name("about");
Route::get('/contact',[PageController::class,'contact'])->name("contact");

Route::post('/form', [UserForm::class, 'form'])->name('form');