<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // إنشاء طالب تجريبي
        User::create([
            'name' => 'محمد بن فريد بن أحمد الزهراني',
            'university_id' => '443100121', // هذا الرقم الذي ستكتبه في اسم المستخدم
            // هنا نضع السجل المدني ككلمة مرور (مشفرة)
            'password' => Hash::make('1000000000'), 
        ]);
    }
}