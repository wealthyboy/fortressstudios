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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('slug')->index()->unique();
            $table->text('description');
            $table->string('genre')->nullable();
            $table->date('release_date')->nullable();
            $table->string('director')->nullable();
            $table->string('producer')->nullable();
            $table->string('cast')->nullable(); // Could be changed to a text type if a lot of data is expected
            $table->string('country')->default('Nigeria');
            $table->integer('duration')->nullable(); // Duration in minutes
            $table->string('language')->default('English');
            $table->string('status')->default('In Production');
            $table->string('film_type')->default('Movie');
            $table->string('film_link')->default('Movie');
            $table->tinyInteger('order')->default(1);
            $table->boolean('featured_in_site')->default(false);// Example statuses: In Production, Released, Archived
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
