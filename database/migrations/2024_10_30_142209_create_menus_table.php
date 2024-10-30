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
            $table->string('icon')->nullable();  // For menu icons
            $table->string('name');              // Name of the menu item
            $table->string('link')->nullable();  // Link for the menu item (nullable for dropdowns)
            $table->unsignedBigInteger('parent_id')->nullable(); // ID of the parent menu item for dropdowns
            $table->timestamps();

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
