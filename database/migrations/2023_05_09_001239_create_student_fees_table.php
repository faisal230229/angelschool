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
        Schema::create('student_fees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->integer('month');
            $table->double('prev_arrears')->nullable();
            $table->double('admission_fee')->nullable();
            $table->double('tution_fee')->nullable();
            $table->double('stationary_fee')->nullable();
            $table->double('paper_fund')->nullable();
            $table->double('others')->nullable();
            $table->double('total')->nullable();
            $table->double('received')->nullable();
            $table->double('arrears')->nullable();
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_fees');
    }
};
