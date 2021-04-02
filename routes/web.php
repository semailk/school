<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use  App\Http\Controllers\BlogController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/teacher', [MainController::class, 'teacher'])->name('teacher');
Route::get('/courses', [MainController::class, 'courses'])->name('courses');
Route::get('/pricing', [MainController::class, 'pricing'])->name('pricing');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contact-us');

Route::get('/logout', [MainController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
