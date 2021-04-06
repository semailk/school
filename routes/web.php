<?php

use App\Models\Account;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use  App\Http\Controllers\BlogController;
use App\Http\Controllers\AccountController;
use \App\Http\Controllers\CourseController;
use \App\Http\Controllers\GalleryController;

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
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/teacher', [MainController::class, 'teacher'])->name('teacher');
Route::get('/courses', [CourseController::class, 'getCoursesAll'])->name('courses');

Route::get('/getCourse', [CourseController::class, 'getCourse'])->name('get.course');

Route::get('/pricing', [MainController::class, 'pricing'])->name('pricing');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contact-us');
Route::get('/new', [BlogController::class, 'getNew'])->name('get.new');
Route::post('/contact-us/save', [MainController::class, 'contactUsSave'])->name('contact.us.save');

Route::get('/logout', [MainController::class, 'logout'])->name('logout');
Route::get('/account', [AccountController::class, 'userInformation'])->name('userInformation')->middleware('auth');
Auth::routes();

Route::post('/img/update',[AccountController::class,'imgUpdate'])->name('img.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
