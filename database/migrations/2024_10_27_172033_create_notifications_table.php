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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('name');     // Name of the sender
            $table->string('email');    // Email of the sender
            $table->string('subject');  // Subject of the notification
            $table->text('message');    // Notification message
            $table->boolean('is_read')->default(false); // Read status
            $table->timestamps();       // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
