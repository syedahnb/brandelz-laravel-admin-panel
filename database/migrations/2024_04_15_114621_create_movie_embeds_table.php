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
        Schema::create('movie_embeds', function (Blueprint $table) {
            $table->id();
            $table->string('imdb');
            $table->string('tmdb');
            $table->string('year');
            $table->string('title');
            $table->string('embed_link');
            $table->boolean('status')->default('1');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_embeds');
    }
};
