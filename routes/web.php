<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/home', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('home.body.about');
});

Route::get('/listing', function () {
    return view('home.body.listing');
});



Route::get('/single_blog', function () {
    return view('home.body.single_blog');
});

Route::get('/blog',[HomeController::class,Blog])->name('blog');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
