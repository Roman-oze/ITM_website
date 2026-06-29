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
        Schema::create('service_categories', function (Blueprint $table) {

            $table->id();

            $table->string('category');

            $table->string('organization_name');

            $table->string('logo')->nullable();

            $table->string('website')->nullable();

            $table->string('software_name')->nullable();

            $table->string('service_type');

            $table->string('country');

            $table->longText('description')->nullable();

            $table->enum('status', ['Active', 'Inactive'])->default('Active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
};
