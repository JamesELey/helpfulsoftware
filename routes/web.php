<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SitemapController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/brand/{brand}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// SEO routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', function () {
    return response("User-agent: *\nAllow: /\n\n# Sitemap\nSitemap: " . url('/sitemap.xml') . "\n\n# Disallow admin areas\nDisallow: /admin/\nDisallow: /admin/login\nDisallow: /admin/dashboard\n\n# Allow all other content\nAllow: /\nAllow: /about\nAllow: /contact\nAllow: /brand/", 200)
        ->header('Content-Type', 'text/plain');
})->name('robots');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/messages/{id}/read', [AdminController::class, 'markAsRead'])->name('admin.mark-read');
    Route::delete('/messages/{id}', [AdminController::class, 'deleteMessage'])->name('admin.delete-message');
});

// Diagnostic routes
Route::get('/test', function () {
    return 'Laravel is working!';
});

Route::get('/diagnose', function () {
    return file_get_contents('diagnose.php');
});
