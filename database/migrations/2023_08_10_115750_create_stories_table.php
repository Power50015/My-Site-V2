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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('name')->nullable();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('client_name')->nullable();
            $table->longText('client_job')->nullable();
            $table->longText('client_image')->nullable();
            $table->longText('client_logo')->nullable();
            $table->longText('statisticTitle1')->nullable();
            $table->longText('statisticNumber1')->nullable();
            $table->longText('statisticTitle2')->nullable();
            $table->longText('statisticNumber2')->nullable();
            $table->longText('link')->nullable();
            $table->longText('linkText')->nullable();
            $table->longText('videoLink')->nullable();
            $table->longText('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
