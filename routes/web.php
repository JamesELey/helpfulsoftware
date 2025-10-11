<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/brand/{brand}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
