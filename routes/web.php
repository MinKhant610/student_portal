<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('portal.index');
})->name('home');

Route::get('/contact', function () {
    return view('contact.contact-us');
});

Route::get('/student_protal', [StudentController::class, 'find']);
Route::get('/get_result', [StudentController::class, 'getResults']);

Route::get('/dashboard', [DashboardController::class, 'all'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/students/', [DashboardController::class, 'edit'])->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
