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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('type'); // 'image' or 'video'
            $table->string('location')->nullable(); // 'image' or 'video'
            $table->string('url')->nullable(); // URL to the image or video
            $table->text('description')->nullable();
            $table->string('orientation')->nullable(); // 'wide' or 'tall', mainly useful for images
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
