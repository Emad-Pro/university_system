<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

// 1. رابط عرض صفحة الدخول (GET) - هذا الباب للعرض فقط
Route::get('/', [AuthController::class, 'showLogin'])->name('login');

// 2. رابط استقبال بيانات الدخول (POST) - هذا الباب لاستلام البيانات
// يجب أن يكون الرابط مطاباقاً للمكان الذي يرسل إليه النموذج (Form)
Route::post('/', [AuthController::class, 'login']); 
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// 3. رابط لوحة التحكم (Dashboard) بعد نجاح الدخول
Route::get('/dashboard', [StudentController::class, 'showProfile'])
    ->name('dashboard')
    ->middleware('auth');
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');