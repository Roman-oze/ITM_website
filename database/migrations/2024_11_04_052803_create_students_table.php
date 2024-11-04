<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   


    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name');
            $table->string('roll');
            $table->string('email')->unique(); // Student's email, unique
            $table->string('blood');
            $table->string('address');
            $table->string('mobile');
            $table->string('type');
            $table->unsignedBigInteger('batch_id'); // Foreign key referencing the batches table
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraint
            $table->foreign('batch_id')->references('batch_id')->on('batches')->onDelete('cascade');
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
