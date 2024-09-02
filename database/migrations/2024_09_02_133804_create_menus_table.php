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
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // Equivalent to $table->bigIncrements('id');
            $table->string('icon');
            $table->string('nav_name');
            $table->string('nav_link');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();

            // Foreign key constraint to self-reference the menus table
            $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
