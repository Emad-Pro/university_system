<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // اسم الطالب
        $table->string('university_id')->unique(); // الرقم الجامعي
        $table->string('password'); // كلمة المرور
        
        // البيانات الإضافية
        $table->string('college')->nullable(); // الكلية
        $table->string('major')->nullable();   // التخصص
        $table->string('campus')->nullable();  // المقر (الرياض - طلاب)
        
        $table->rememberToken();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
