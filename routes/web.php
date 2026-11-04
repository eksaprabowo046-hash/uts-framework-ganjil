<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes - Pemrograman Berbasis Framework (Paket Ganjil)
| Frontend: Pureglow Template
| Backend: Scoxe Admin Template
|--------------------------------------------------------------------------
*/

// ==========================================
// LANDING PAGE / FRONTEND ROUTES (Pureglow)
// ==========================================
Route::get('/', [LandingController::class, 'index'])->name('landing.home');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/products', [LandingController::class, 'products'])->name('landing.products');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('landing.checkout');
Route::get('/testimonials', [LandingController::class, 'testimonials'])->name('landing.testimonials');
Route::get('/blog', [LandingController::class, 'blog'])->name('landing.blog');

// ==========================================
// ADMIN DASHBOARD ROUTES (Scoxe)
// ==========================================
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/charts-chartjs', [AdminController::class, 'chartsChartjs'])->name('admin.charts_chartjs');
    Route::get('/forms-elements', [AdminController::class, 'formsElements'])->name('admin.forms_elements');
    Route::get('/tables-datatables', [AdminController::class, 'tablesDatatables'])->name('admin.tables_datatables');
    Route::get('/ui-sweetalerts', [AdminController::class, 'uiSweetalerts'])->name('admin.ui_sweetalerts');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
});