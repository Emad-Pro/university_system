<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// App\Models\User.php
class User extends Authenticatable
{
protected $fillable = [
    'name',
    'university_id',
    'password',
    'college',
    'major',
    'campus',
];

    // علاقة: الطالب يملك ملفاً شخصياً واحداً
    public function profile()
    {
        return $this->hasOne(StudentProfile::class);
    }

    // علاقة: الطالب لديه حصص متعددة
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}