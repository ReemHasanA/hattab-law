<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::middleware([\App\Http\Middleware\SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::get('about', [HomeController::class, 'about']);
    Route::get('practice', [HomeController::class, 'practice']);
    Route::get('team', [HomeController::class, 'team']);
    Route::get('contact', [HomeController::class, 'contact']);
});

// for dynamic practice area
Route::get('/practice', [PracticeController::class, 'index']);
// Route::resource('practices', PracticeController::class);

// Authentication Routes (Login)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.board');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/admin/practices/create', [PracticeController::class, 'create'])->name('practices.create');
Route::get('/admin/practices', [PracticeController::class, 'create'])->name('practices.create');
Route::post('/admin/practices/store', [PracticeController::class, 'store'])->name('practices.store');
Route::get('/admin/practices/edit/{id}', [PracticeController::class, 'edit'])->name('practices.edit');
Route::post('/admin/practices/update/{id}', [PracticeController::class, 'update'])->name('practices.update');
Route::delete('/admin/practices/destroy/{id}', [PracticeController::class, 'destroy'])->name('practices.destroy');

Route::post('/admin/additional/store', [PracticeController::class, 'storeAdditional'])->name('additional.store');

// Route::get('/practices/{id}', [PracticeController::class, 'show'])->name('practices.show');

// Public Page to View Team
Route::get('/team', [TeamMemberController::class, 'index'])->name('team.index');

// Admin Routes for Managing Team
Route::get('/admin/team/create', [TeamMemberController::class, 'create'])->name('team.create');
Route::post('/admin/team/store', [TeamMemberController::class, 'store'])->name('team.store');

// Edit and Update Team Member
Route::get('/admin/team/{id}/edit', [TeamMemberController::class, 'edit'])->name('team.edit');
Route::post('/admin/team/{id}/update', [TeamMemberController::class, 'update'])->name('team.update');

// Delete Team Member
Route::post('/admin/team/{id}/delete', [TeamMemberController::class, 'destroy'])->name('team.delete');

// Route::get('/practices', [PracticeController::class, 'index'])->name('practices');

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

Route::get('/practices/{id}', [PracticeController::class, 'show'])->name('practices.show');



