<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');




//admin
Route::get('/admin/events', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.event');
Route::post('/admin/events', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
Route::get('/admin/regevent', [App\Http\Controllers\AdminController::class, 'regevent'])->name('regevent');

Route::get('/admin/viewevents', [App\Http\Controllers\AdminController::class, 'viewevents'])->name('viewevents');
Route::get('/admin/bookings', [App\Http\Controllers\AdminController::class, 'bookings'])->name('bookings');





