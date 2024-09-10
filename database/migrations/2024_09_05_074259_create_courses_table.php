<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_category');
            $table->integer('course_duration');
            $table->text('course_details');
            $table->decimal('course_price', 8, 2);
            $table->string('course_teacher');
            $table->date('course_begin');
            $table->date('course_stop');
            $table->string('course_image')->nullable();
            $table->timestamps();

        });
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name'); // ชื่อครู
            $table->string('teacher_surname'); // นามสกุลครู
            $table->string('teacher_performance'); // การแสดงผล
            $table->string('teacher_image')->nullable(); // รูปภาพครู
            $table->string('password'); // รหัสผ่าน (hashed)
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
