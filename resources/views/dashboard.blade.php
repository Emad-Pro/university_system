@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4" dir="rtl">
    
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-xl font-bold text-gray-800">اسم الطالب: {{ Auth::user()->name }}</h1>
            <p class="text-gray-600 mt-1">الرقم الجامعي: <span class="text-blue-600 font-mono">{{ Auth::user()->university_id }}</span></p>
            <div class="mt-4 flex gap-4 text-sm text-gray-500">
                <span>🏛 الكلية: {{ Auth::user()->profile->college }}</span>
                <span>👨‍⚕️ التخصص: {{ Auth::user()->profile->major }}</span>
                <span>📍 المقر: {{ Auth::user()->profile->campus }}</span>
            </div>
        </div>
        <div class="h-20 w-20 rounded-full bg-gray-200 overflow-hidden">
            <img src="{{ asset('images/avatar.png') }}" alt="Student Avatar" class="object-cover h-full w-full">
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-bold border-b pb-4 mb-4">🗓 جدول الطالب الدراسي ({{ date('Y') }})</h2>
        
        @if(Auth::user()->schedules->isEmpty())
            <div class="text-center py-10 text-red-500">
                <p>لا يوجد مقررات مسجلة (كما يظهر في نظام EduGate الحالي)</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach(Auth::user()->schedules as $schedule)
                <div class="border-r-4 border-blue-500 bg-gray-50 p-4 rounded shadow-sm hover:shadow-md transition">
                    <h3 class="font-bold text-gray-800">{{ $schedule->course_name }}</h3>
                    <p class="text-sm text-gray-600">{{ $schedule->course_code }}</p>
                    <div class="mt-3 text-sm">
                        <p>🕒 {{ $schedule->day }} | {{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }}</p>
                        <p>🚪 القاعة: {{ $schedule->location }}</p>
                        <p>👨‍🏫 {{ $schedule->instructor }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection