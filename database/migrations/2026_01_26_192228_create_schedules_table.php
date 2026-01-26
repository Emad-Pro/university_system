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
    Schema::create('schedules', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('course_name'); // اسم المادة
        $table->string('course_code'); // رمز المقرر
        $table->string('instructor'); // اسم المحاضر
        $table->string('location'); // القاعة
        $table->string('day'); // اليوم (الأحد، الاثنين...)
        $table->time('start_time'); // وقت البدء
        $table->time('end_time'); // وقت النهاية
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
