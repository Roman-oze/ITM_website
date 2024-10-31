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
            $table->id();
            $table->string('name');                  // Menu name
            $table->string('icon')->nullable();      // Font Awesome icon class (nullable)
            $table->string('link')->nullable();      // Link path
            $table->foreignId('parent_id')->nullable()->constrained('menus')->onDelete('cascade'); // Parent menu for dropdown
            $table->integer('order')->nullable(); // Sort order for display (nullable)
            $table->timestamps();
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
