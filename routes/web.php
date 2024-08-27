<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\DashboardController;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
     ->middleware('auth', 'verified')
     ->name('dashboard');


Route::middleware('web')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('welcome');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    // Route::get('/dashboard' , [DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::resource('services', ServiceController::class)->except(['show']);
});

// Auth::routes(['register' => false]);


require __DIR__.'/auth.php';

Route::get('/404', function () {
    return view('errors.404');
});
