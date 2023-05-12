<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adjudication\AdjudicationController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;


Route::get('/', [LandingController::class, 'index'])->name('home');

Route::post('/landing/contact', [LandingController::class, 'store'])->name('landing.store');
Route::get('emails/contact/{id}', [LandingController::class, 'display']);

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');

Route::get('faq', [FaqController::class, 'index'])->name('faq');

Route::get('register', [SignupController::class, 'index'])->name('register');
Route::post('register/store', [SignupController::class, 'store'])->name('register.store');
Route::get('verify/email/{id}/{token}', [SignupController::class, 'verifyEmail'])
    ->name('verify.email');
Route::get('email/verify', [SignupController::class, 'showVerificationNotice'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('signin', [LoginController::class, 'signin'])->name('signin');
Route::post('signout', [LoginController::class, 'signout'])->name('signout');

Route::get('adjudications/create', [AdjudicationController::class, 'create'])->name('create-adjudication');
Route::get('adjudications/index', [AdjudicationController::class, 'index'])->name('list-adjudication');
Route::get('adjudications/{id}/show', [AdjudicationController::class, 'show'])->name('show-adjudication');
Route::get('adjudications/{diseaseId}/edit', [AdjudicationController::class, 'edit'])->name('edit-adjudication');
Route::get('adjudications/dashboard', [AdjudicationController::class, 'dashboard'])->name('dashboard');
