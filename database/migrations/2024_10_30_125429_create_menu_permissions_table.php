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
        Schema::create('menu_permissions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade'); // Foreign key to 'menus' table
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade'); // Foreign key to 'roles' table
            $table->boolean('can_create')->default(false); // Permission to create
            $table->boolean('can_edit')->default(false);   // Permission to edit
            $table->boolean('can_update')->default(false); // Permission to update
            $table->boolean('can_delete')->default(false); // Permission to delete
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_permissions');
    }
};
