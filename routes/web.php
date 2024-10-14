<?php

use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');