<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::get('about', [HomeController::class, 'about']);
    Route::get('contact', [HomeController::class, 'contact'])->name("contact.home");
    // Public Page to View Team
    Route::get('/team', [TeamMemberController::class, 'index'])->name('team.index');
    Route::get('/practices/{id}', [PracticeController::class, 'show'])->name('practices.show');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});


Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Authentication Routes (Login)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.board');

    Route::get('/practices/create', [PracticeController::class, 'create'])->name('practices.create');
    Route::get('/practices', [PracticeController::class, 'create'])->name('practices.create');
    Route::post('/practices/store', [PracticeController::class, 'store'])->name('practices.store');
    Route::get('/practices/edit/{id}', [PracticeController::class, 'edit'])->name('practices.edit');
    Route::post('/practices/update/{id}', [PracticeController::class, 'update'])->name('practices.update');
    Route::delete('/practices/destroy/{id}', [PracticeController::class, 'destroy'])->name('practices.destroy');
    
    // Admin Routes for Managing Team
    Route::get('/team/create', [TeamMemberController::class, 'create'])->name('team.create');
    Route::post('/team/store', [TeamMemberController::class, 'store'])->name('team.store');
    // Edit and Update Team Member
    Route::get('/team/{id}/edit', [TeamMemberController::class, 'edit'])->name('team.edit');
    Route::post('/team/{id}/update', [TeamMemberController::class, 'update'])->name('team.update');
    // Delete Team Member
    Route::post('/team/{id}/delete', [TeamMemberController::class, 'destroy'])->name('team.delete');

    Route::group(['prefix'=> 'contact', 'as'=> 'contact.'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('/show/{id}', [ContactController::class, 'show'])->name('show');
    });
});



// for language switching
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
        App::setLocale($locale);
    }

    return redirect()->back();
})->name('switchLang');

Route::get('/admin/board', function () {
    return view('admin.board');
})->name('admin.board');



