<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//show all
Route::get('products',[ProductController::class,'index'])->name('products_index');

//show one
Route::get('products/show/{id}',[ProductController::class,'show'])->name('products_show');

//Add New
Route::get('products/create',[ProductController::class,'create'])->name('products_create');
Route::post('products/store',[ProductController::class,'store'])->name('products_store');