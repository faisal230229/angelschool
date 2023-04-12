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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cnic');
            $table->string('phone');
            $table->unsignedBigInteger('class_id');
            $table->string('email')->unique()->nullable();
            $table->string('dob');
            $table->string('session');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_education');
            $table->string('mother_education');
            $table->string('father_cnic');
            $table->string('father_phone');
            $table->text('address');
            $table->string('guardian_name');
            $table->string('guardian_occupation');
            $table->string('guardian_cnic');
            $table->string('guardian_phone');
            $table->text('guardian_address');
            $table->enum('nationality', ['Pakistani', 'Non Pakistani']);
            $table->enum('religion', ['Islam', 'Hindu', 'Cristan', 'Other']);
            $table->string('image');
            $table->text('last_school');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
