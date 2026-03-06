<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;

Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/about', function () {
return view('about');
})->name('about');

Route::get('/contact', function () {
return view('contact');
})->name('contact');

Route::get('/products',[testcontroller::class,'index'])
->name('products.index');

Route::get('/products/{id}',[testcontroller::class,'show'])
->name('products.show');

?>