<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;



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

    $categories=DB::table('categories')->get();
    return view('home.index',compact('categories'));
});
 


// Home page routes
Route::get('/blog',[HomeController::class,'Blog'])->name('blog');
Route::get('/listing',[HomeController::class,'Listing'])->name('listing');
Route::get('/about',[HomeController::class,'About'])->name('about');
Route::get('/contact',[HomeController::class,'Contact'])->name('contact');
Route::get('/single_blog',[HomeController::class,'Single_blog'])->name('single_blog');



// Admin routes
Route::get('/dashboards',[AdminController::class,'Dashboard'])->name('dashs');
Route::get('/add',[AdminController::class,'AddJob'])->name('store.job');

Route::post('/store.jobs',[AdminController::class,'StoreJobs']);

Route::get('/add_category',[AdminController::class,'AddCat'])->name('add_category');
Route::post('/store.category',[AdminController::class,'StoreCat'])->name('store.category');
Route::get('/view_category',[AdminController::class,'ViewCat'])->name('view.category');
Route::get('/category/delete/{id}',[AdminController::class,'DelCat']);
Route::get('/category/edit/{id}',[AdminController::class,'EditCat']);











Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
