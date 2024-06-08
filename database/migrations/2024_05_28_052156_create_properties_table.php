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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code')->unique();
            $table->string('land_area')->nullable();
            $table->string('appartment_size')->nullable();
            $table->integer('bed_room')->nullable();
            $table->integer('bath_room')->nullable();
            $table->integer('drawing_room')->nullable();
            $table->integer('dining_room')->nullable();
            $table->integer('price')->nullable();
            $table->integer('garage')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('property_type_id')->constrained('property_types')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->string('property_purpose');
            $table->string('video_link')->nullable();
            $table->string('image')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('owner_email')->nullable();
            $table->string('owner_facebook')->nullable();
            $table->string('owner_twitter')->nullable();
            $table->string('owner_linkedin')->nullable();
            $table->string('owner_instagram')->nullable();
            $table->unsignedTinyInteger('status')->default(0); // 0: pending, 1: approved, 2: rejected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
