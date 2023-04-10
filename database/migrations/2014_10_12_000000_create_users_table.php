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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cnic');
            $table->string('image');
            $table->string('dob');
            $table->string('phone');
            $table->string('qualification');
            $table->text('address');
            $table->unsignedBigInteger('class_teacher');
            $table->enum('type', ['admin', 'teacher'])->default('teacher');
            $table->enum('nationality', ['Pakistani', 'Non Pakistani']);
            $table->enum('religion', ['Islam', 'Hindu', 'Cristan', 'Other']);
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
