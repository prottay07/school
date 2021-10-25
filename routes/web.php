<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// User Management Routes

Route::prefix('users')->group(function(){

    Route::get('/view', [UserController::class, 'userView'])->name('user.view');
    Route::get('/add', [UserController::class, 'userAdd'])->name('users.add');
    Route::post('/store', [UserController::class, 'userStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'userEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'userUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'userDelete'])->name('users.delete');

});

// Profile Management Routes

Route::prefix('profile')->group(function(){

    Route::get('/view', [ProfileController::class, 'profileView'])->name('profile.view')->middleware('auth');
    Route::get('/edit', [ProfileController::class, 'editProfile'])->name('edit.profile')->middleware('auth');
    Route::post('/store', [ProfileController::class, 'profileStore'])->name('profile.store')->middleware('auth');
    Route::get('/password/view', [ProfileController::class, 'viewPassword'])->name('password.view');
    Route::post('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update')->middleware('auth');
});
