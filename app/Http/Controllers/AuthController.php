<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{    public function showRegister()
{
    return view('auth.register');
}

public function register(Request $request)
{
    // 1. التحقق من البيانات
    $request->validate([
        'name' => 'required|string|max:255',
        'university_id' => 'required|unique:users',
        'password' => 'required|min:6',
        'college' => 'required',
        'major' => 'required',
    ]);

    // 2. إنشاء الطالب
    $user = User::create([
        'name' => $request->name,
        'university_id' => $request->university_id,
        'password' => Hash::make($request->password),
        'college' => $request->college,
        'major' => $request->major,
        'campus' => 'الرياض - طلاب', // قيمة افتراضية أو يمكن إضافتها للفورم
    ]);

    // 3. تسجيل الدخول مباشرة
    Auth::login($user);

    // 4. التوجيه للداشبورد
    return redirect()->route('dashboard');
}
    // ---------------------------------------------------
    // 1. هذه هي الدالة الناقصة التي سببت الخطأ
    // وظيفتها: عرض ملف التصميم (صفحة الدخول)
    // ---------------------------------------------------
    public function showLogin()
    {
        // تأكد أن ملف التصميم موجود في resources/views/auth/login.blade.php
        return view('auth.login');
    }

    // ---------------------------------------------------
    // 2. دالة معالجة الدخول (التحقق من البيانات)
    // ---------------------------------------------------
  public function login(Request $request)
{
    // 1. التحقق أن الحقول ليست فارغة
    $request->validate([
        'university_id' => 'required',
        'national_id'   => 'required',
    ]);

    // 2. محاولة الدخول
    // نأخذ 'national_id' من الفورم ونقارنه مع 'password' في الداتابيز
    $credentials = [
        'university_id' => $request->university_id,
        'password'      => $request->national_id 
    ];

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        // توجيه للداشبورد (صفحة الجدول)
        return redirect()->intended('dashboard');
    }

    // 3. في حالة الخطأ
    return back()->withErrors([
        'university_id' => 'بيانات الدخول غير صحيحة.',
    ]);
}
    
    // ---------------------------------------------------
    // 3. دالة تسجيل الخروج (اختيارية حالياً)
    // ---------------------------------------------------
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}