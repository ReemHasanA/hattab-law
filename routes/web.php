<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::get('about', [HomeController::class, 'about']);
    Route::get('practice', [HomeController::class, 'practice']);
    Route::get('team', [HomeController::class, 'team']);
    Route::get('contact', [HomeController::class, 'contact']);
});

// for dynamic practice area
Route::get('/practice', [PracticeController::class, 'index']);
// Route::resource('practices', PracticeController::class);

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
    
    Route::post('/additional/store', [PracticeController::class, 'storeAdditional'])->name('additional.store');
});

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



