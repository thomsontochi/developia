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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the service
            $table->text('description'); // Description of the service
            $table->decimal('price', 8, 2)->nullable(); // Price of the service
            $table->string('duration')->nullable(); // Duration of the service
            $table->string('category')->nullable(); // Category of the service
            $table->string('image')->nullable(); // Image URL for the service
            $table->boolean('is_active')->default(true); // Status of the service
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
