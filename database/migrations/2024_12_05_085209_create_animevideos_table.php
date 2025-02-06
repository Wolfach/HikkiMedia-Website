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
        Schema::create('animevideos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anime_id');
            $table->unsignedBigInteger('video_id');
            $table->foreign('anime_id')->references('id')->on('anime')->onDelete('cascade');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animevideos');
    }
};
