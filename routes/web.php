<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\LandingController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\FooterController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/berita', [LandingController::class, 'articles'])->name('landing.articles.index');
Route::get('/berita/{article:slug}', [LandingController::class, 'showArticle'])->name('landing.articles.show');
Route::get('/video', [LandingController::class, 'videos'])->name('landing.videos.index');

Route::middleware(['guest'])->group(function () {    
    Route::get('/admin-dashboard', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/admin', [AuthController::class, 'login']);
});


Route::middleware(['auth', 'authed', 'prevent-back-history'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('videos', VideoController::class);
    
    // Hero Section CRUD
    Route::get('/hero', [HeroSectionController::class, 'index'])->name('hero.index');
    Route::post('/hero', [HeroSectionController::class, 'update'])->name('hero.update');

    // Footer CRUD
    Route::get('/footer', [FooterController::class, 'index'])->name('footer.index');
    Route::post('/footer', [FooterController::class, 'update'])->name('footer.update');

    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');
});
