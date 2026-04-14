<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/news', [HomeController::class, 'newsIndex'])->name('news.index');
Route::get('/news/{news:slug}', [HomeController::class, 'newsDetail'])->name('news.show');
Route::get('/announcements/{announcement}', [HomeController::class, 'announcementDetail'])->name('announcement.show');
