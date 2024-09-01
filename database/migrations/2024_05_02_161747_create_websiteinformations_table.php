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
        Schema::create('websiteinformations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('contact_email')->index();
            $table->string('address')->index();
            $table->string('phone')->index();
            $table->string('facebook_link')->index()->nullable();
            $table->string('x_link')->index()->nullable();
            $table->string('instagram')->index()->nullable();
            $table->string('linked_in')->index()->nullable();
            $table->integer('projects_counter')->index()->nullable();
            $table->integer('experience_counter')->index()->nullable();
            $table->integer('awards_counter')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websiteinformations');
    }
};
