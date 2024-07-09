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


//Delete
Route::get('products/create/{id}',[ProductController::class,'delconfirm'])->name('products_delconfirm');
Route::get('products/delete/{id}',[ProductController::class,'delete'])->name('products_delete');

//update
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products_edit');
Route::post('products/update/{id}',[ProductController::class,'update'])->name('products_update');
