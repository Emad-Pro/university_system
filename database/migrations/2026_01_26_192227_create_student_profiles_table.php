<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('student_profiles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ربط مع جدول المستخدمين
        $table->string('college'); // الكلية (مثلاً: الطب)
        $table->string('major'); // التخصص (مثلاً: طب وجراحة)
        $table->string('campus')->default('الرياض - طلاب'); // المقر
        $table->string('avatar')->nullable(); // صورة الطالب
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
