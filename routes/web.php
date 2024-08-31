<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PublicTestimonialController;



Route::get('/testi', function () {
    return view('testi');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
     ->middleware('auth', 'verified')
     ->name('dashboard');


Route::middleware('web')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('welcome');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/testimonials/create', [PublicTestimonialController::class, 'create'])->name('testimonials.public.create');
    Route::post('/testimonials', [PublicTestimonialController::class, 'store'])->name('testimonials.public.store');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    // Route::get('/dashboard' , [DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::resource('services', ServiceController::class)->except(['show']);

    Route::resource('/testimonials', TestimonialController::class);
    Route::post('/testimonials/{id}/approve', [TestimonialController::class, 'approve'])->name('testimonials.approve');
    Route::post('/testimonials/{id}/reject', [TestimonialController::class, 'reject'])->name('testimonials.reject');
});

// Auth::routes(['register' => false]);


require __DIR__.'/auth.php';

Route::get('/404', function () {
    return view('errors.404');
});
