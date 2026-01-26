<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // استدعاء موديل الطالب

class StudentController extends Controller
{

public function showProfile()
{
    // جلب المستخدم المسجل حالياً من الداتابيز
    $student = auth()->user(); 

    // جدول فارغ مؤقتاً
    $schedules = []; 

    return view('profile', compact('student', 'schedules'));
}

}