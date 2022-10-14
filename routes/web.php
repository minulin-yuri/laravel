<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\News\IndexController as NewsIndexController;
use App\Http\Controllers\News\CategoriesController as NewsCategoriesController;
use App\Http\Controllers\Users\IndexController as UsersIndexController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/news', [NewsIndexController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsIndexController::class, 'show'])->name('newsOne');

Route::prefix('categories')
    ->group(function () {
        Route::get('/', [NewsCategoriesController::class, 'index'])->name('categories');
        Route::get('/{title}', [NewsCategoriesController::class, 'show'])->name('categoriesOne');
    });

Route::name('admin.')
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', [AdminIndexController::class, 'index'])->name('index');
        Route::get('/test1', [AdminIndexController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminIndexController::class, 'test2'])->name('test2');
    });


Route::get('/login', [UsersIndexController::class, 'index'])->name('login.index');
