<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('user_type');
            $table->string('name');
            $table->string('stu_phone');
            $table->string('stu_email');
            $table->string('stu_RegistrationNumber');
            $table->string('branch');
            $table->string('section');
            $table->string('year_from');
            $table->string('current_year');
            $table->string('current_sem'); 
            $table->string('year_too');
            $table->string('stu_dob');
            $table->string('stu_password');
            $table->string('stu_token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
};
