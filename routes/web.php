<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/tentang-kami', [SiteController::class, 'about'])->name('about');
Route::get('/produk-fitur', [SiteController::class, 'features'])->name('features');
Route::get('/harga', [SiteController::class, 'pricing'])->name('pricing');
Route::get('/portofolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/5-tips-mengelola-keuangan-bisnis-di-era-digital', [SiteController::class, 'blogDetail'])->name('blog.detail');
Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
Route::get('/kontak', [SiteController::class, 'contact'])->name('contact');
Route::post('/kontak', [SiteController::class, 'contactSubmit'])->name('contact.submit');
Route::post('/demo', [SiteController::class, 'demoSubmit'])->name('demo.submit');

Route::get('/login', function () {return redirect()->route('home');})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/demo/{index}/status', [AdminController::class, 'updateDemoStatus'])->name('admin.demo.status');
