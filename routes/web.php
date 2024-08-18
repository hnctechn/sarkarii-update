<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client as Client;
use App\Http\Controllers\Admin as Admin;

Route::middleware('guest')->group(function () {
    Route::get('/', [Client\HomeController::class, 'index'])->name('home');

    Route::controller(Client\ClientLatestJobController::class)->group(function () {
        Route::get('/latest-job', 'index');
        Route::get('/latest-job/{slug}', 'show');
    });
    Route::controller(Client\ClientResultController::class)->group(function () {
        Route::get('/result', 'index');
        Route::get('/result/{slug}', 'show');
    });
    Route::controller(Client\ClientAdmitCardController::class)->group(function () {
        Route::get('/admit-card', 'index');
        Route::get('/admit-card/{slug}', 'show');
    });
    Route::controller(Client\ClientAnswerKeyController::class)->group(function () {
        Route::get('/answer-key', 'index');
        Route::get('/answer-key/{slug}', 'show');
    });
    Route::controller(Client\ClientSyllabusController::class)->group(function () {
        Route::get('/syllabus', 'index');
        Route::get('/syllabus/{slug}', 'show');
    });

    // Route::view('/latest-job', 'Client/latest-job');
    // Route::view('/result', 'Client/result');
    // Route::view('/admit-card', 'Client/admit-card');
    // Route::view('/answer-key', 'Client/answer-key');
    // Route::view('/syllabus', 'Client/syllabus');
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
    
    Route::controller(Admin\LatestJobController::class)->group(function () {
        Route::get('latest-job', 'index');
        Route::get('latest-job/create', 'create');
        Route::post('latest-job/store', 'store')->name('latest_job.store');
        Route::get('latest-job/data-table', 'data_table');
        Route::get('latest-job/edit/{id}', 'edit');
    });
    
    Route::controller(Admin\ResultController::class)->group(function () {
        Route::get('result', 'index');
        Route::get('result/create', 'create');
        Route::post('result/store', 'store')->name('result.store');
        Route::get('result/data-table', 'data_table');
        Route::get('result/edit/{id}', 'edit');
    });
    
    Route::controller(Admin\AdmitCardController::class)->group(function () {
        Route::get('admit-card', 'index');
        Route::get('admit-card/create', 'create');
        Route::post('admit-card/store', 'store')->name('admit_card.store');
        Route::get('admit-card/data-table', 'data_table');
        Route::get('admit-card/edit/{id}', 'edit');
    });
    
    Route::controller(Admin\AnswerKeyController::class)->group(function () {
        Route::get('answer-key', 'index');
        Route::get('answer-key/create', 'create');
        Route::post('answer-key/store', 'store')->name('answer_key.store');
        Route::get('answer-key/data-table', 'data_table');
        Route::get('answer-key/edit/{id}', 'edit');
    });
    
    Route::controller(Admin\SyllabusController::class)->group(function () {
        Route::get('syllabus', 'index');
        Route::get('syllabus/create', 'create');
        Route::post('syllabus/store', 'store')->name('syllabus.store');
        Route::get('syllabus/data-table', 'data_table');
        Route::get('syllabus/edit/{id}', 'edit');
    });
    
    Route::controller(Admin\BaseController::class)->group(function () {
        Route::post('change-status', 'change_status');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::fallback(function(){ 
        abort(404);  
    });
});

require __DIR__.'/auth.php';
