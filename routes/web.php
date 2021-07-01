<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;

Route::get('/', [ListingsController::class, 'index'])->name('index');

Auth::routes();

Route::get('/listings/create', [ListingsController::class, 'create'])->name('create.listing');
Route::post('/listings/create', [ListingsController::class, 'store']);

Route::get('/listings/edit/{listing}', [ListingsController::class, 'edit'])->name('edit.listing');
Route::put('/listings/edit/{listing}', [ListingsController::class, 'update']);
Route::delete('/listings/edit/{listing}', [ListingsController::class, 'destroy']);

Route::get('/listing/{listing}', [ListingsController::class, 'show'])->name('show.listing');


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
