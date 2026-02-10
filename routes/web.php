<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\LandingController;

use App\Http\Controllers\AuthController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/berita', [LandingController::class, 'articles'])->name('landing.articles.index');
Route::get('/berita/{article:slug}', [LandingController::class, 'showArticle'])->name('landing.articles.show');
Route::get('/video', [LandingController::class, 'videos'])->name('landing.videos.index');

Route::get('/admin', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin', [AuthController::class, 'login']);


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('videos', VideoController::class);
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');
});
