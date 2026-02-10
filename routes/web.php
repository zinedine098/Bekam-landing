<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/admin', function () {
    return view('admin.Auth.login');
});
Route::get('/admin/dashboard', function () {
    return view('admin.Dashboard.home');
});