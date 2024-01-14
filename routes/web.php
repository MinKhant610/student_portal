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

//Dashboard
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'all'])->name('dashboard');
    Route::get('/dashboard/students/{student:id}/check', [DashboardController::class, 'check']);
    Route::get('/dashboard/create/', [DashboardController::class, 'create'])->name('create');
    Route::post('/dashboard/store/', [DashboardController::class, 'store']);
    Route::delete('/dashboard/students/{student:id}/delete', [DashboardController::class, 'destroy']);
    Route::get('/dashboard/students/{student:id}/edit', [DashboardController::class, 'edit']);
    Route::patch('/dashboard/students/{student:id}/update', [DashboardController::class, 'update']);

});

//Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
