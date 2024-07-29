<?php

use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeConroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashBordController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MonthRepoController;

Route::get('/', [AuthenticationController::class, 'index'])->name('register');
Route::post('/store', [AuthenticationController::class, 'store'])->name('store');
Route::get('/edit', [AuthenticationController::class, 'edit'])->name('edit');
Route::post('/update', [AuthenticationController::class, 'update'])->name('update');

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('/logincheck', [AuthenticationController::class, 'logincheck'])->name('logincheck');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::middleware(AuthCheck::class)->group(function(){
    Route::get('/dashboard', [DashBordController::class, 'dashboardpage'])->name('dashboard');   
    Route::get('/dashboard/income', [IncomeConroller::class, 'index'])->name('income');
    Route::get('/dashboard/income/create', [IncomeConroller::class, 'create'])->name('income.create');
    Route::post('/dashboard/income/store', [IncomeConroller::class, 'store'])->name('income.store');
    Route::get('/dashboard/income/edit/{id}', [IncomeConroller::class, 'edit'])->name('income.edit');
    Route::post('/dashboard/income/update/{id}', [IncomeConroller::class, 'update'])->name('income.update');
    Route::get('/dashboard/income/delete/{id}', [IncomeConroller::class, 'delete'])->name('income.delete');

    Route::get('/income/filter', [IncomeConroller::class, 'filter'])->name('filter');

    Route::get('/dashboard/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/dashboard/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/dashboard/category/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/dashboard/monthdata', [MonthRepoController::class, 'index'])->name('monthlyData');
    Route::get('/dashboard/monthdata/pdf/{month}/{year}', [MonthRepoController::class, 'genratepdf'])->name('monthlyData.pdfgenrate');
    Route::get('/dashboard/testpdf/pdfdata', [MonthRepoController::class, 'textpdf'])->name('testpdf.pdfgenrate');
});

