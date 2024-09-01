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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('author_position')->nullable(); // Position or title of the testimonial author, if relevant
            $table->string('author_company')->nullable(); // Company or organization name if applicable
            $table->text('content'); // The actual testimonial text
            $table->boolean('status')->default(true); // Whether the testimonial is active or not
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
