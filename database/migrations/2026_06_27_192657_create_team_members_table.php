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
    Schema::create('team_members', function (Blueprint $table) {
        $table->id('teammember_id');
        $table->string('image')->nullable();
        $table->string('name');
        $table->string('designation');
        $table->string('fb')->nullable();
        $table->string('linked')->nullable();
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
