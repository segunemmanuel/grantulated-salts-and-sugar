<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
    return view('home.index');
});
 


// Home page routes
Route::get('/blog',[HomeController::class,'Blog'])->name('blog');
Route::get('/listing',[HomeController::class,'Listing'])->name('listing');
Route::get('/about',[HomeController::class,'About'])->name('about');
Route::get('/contact',[HomeController::class,'Contact'])->name('contact');
Route::get('/single_blog',[HomeController::class,'Single_blog'])->name('single_blog');



// Admin routes
Route::get('/dashboards',[AdminController::class,'Dashboard'])->name('dashs');
Route::get('/add',[AdminController::class,'AddJob'])->name('add_jobs');
Route::get('/store',[AdminController::class,'StoreJobs'])->name('add_jobs');
Route::get('/add_category',[AdminController::class,'AddCat'])->name('add_category');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
