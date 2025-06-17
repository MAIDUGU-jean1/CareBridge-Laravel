<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientLogicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});


Route::middleware('auth')->group( function(){
        // Patient Route 
    Route::prefix('patient')->group(function () {
        Route::get('index', [PatientController::class,'showHome'])->name('Home.Show');
        Route::get('dashboard', [PatientController::class,'showDashboard'])->name('Dashboard.Show');
        Route::get('favourite', [PatientController::class,'showFavourite'])->name('Favourite.Show');
        Route::get('profile-setting', [PatientController::class , 'showProfile'])->name('Profile.Show');
        Route::get('change-password', [PatientController::class,'showChangePassword'])->name('ChangePassword.Show');
        Route::get('chat', [PatientController::class,'showChat'])->name('Chat.Show');
        Route::get('search', [PatientController::class,'searchDoctor'])->name('Search.Show');
        Route::get('book', [PatientController::class, 'showBook' ])->name('Book.Show');
        Route::get('checkout', [PatientController::class, 'showCheckout'])->name('CheckOut.Show');
        Route::post('profile-update', [PatientLogicController::class,'UpdateProfile'])->name('Profile.Update');
        Route::post('update-password', [PatientLogicController::class,'UpdatePassword'])->name('Password.Update');
        Route::post('logout', [PatientLogicController::class,'Logout'])->name('Logout');
    });
});

/// Authentication Routes
Route::post('/register', [AuthController::class,'store'])->name('register');
Route::post('/login', [AuthController::class,'Login'])->name('login');  