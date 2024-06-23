<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client as Client;
use App\Http\Controllers\Admin as Admin;

Route::middleware('guest')->group(function () {
    Route::get('/', [Client\HomeController::class, 'index'])->name('home');
    Route::view('/latest-job', 'Client/latest-job');
    Route::view('/result', 'Client/result');
    Route::view('/admit-card', 'Client/admit-card');
    Route::view('/answer-key', 'Client/answer-key');
    Route::view('/syllabus', 'Client/syllabus');
    Route::view('/contact', 'Client/contact');
    Route::view('/about', 'Client/about');
    Route::view('/privacy-policy', 'Client/privacy-policy');
    Route::view('/disclaimer', 'Client/disclaimer');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('Admin.dashboard');
    })->name('dashboard');

    Route::controller(Admin\CmsController::class)->group(function () {
        Route::get('cms', 'index');
        Route::post('cms/store', 'store')->name('cms.store');
        Route::get('cms/get-page-content', 'get_page_content');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
