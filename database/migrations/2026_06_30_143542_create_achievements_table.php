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
        Schema::create('achievements', function (Blueprint $table) {

            $table->id();

            $table->string('image')->nullable();

            $table->string('title');

            $table->string('type');

            $table->string('organization');

            $table->date('achievement_date');

            $table->text('description')->nullable();

            $table->string('certificate')->nullable();

            $table->boolean('featured')->default(false);

            $table->enum('status', ['Active', 'Inactive'])->default('Active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
