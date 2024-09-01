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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('expertise'); // Field for area of expertise or job title
            $table->text('bio_statement'); // Short biography or statement about the person
            $table->string('linkedin_link')->nullable(); // LinkedIn profile URL
            $table->string('twitter_link')->nullable(); // Twitter profile URL
            $table->string('email_address')->unique(); // Email address
            $table->string('instagram_link')->nullable(); // Instagram profile URL
            $table->boolean('status')->default(true); // Active or inactive status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
