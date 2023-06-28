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
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->string('hero') -> nullable();
            $table->string('hero_body') -> nullable();
            $table->string('fitur') -> nullable();
            $table->string('fitur_body') -> nullable();
            $table->string('kategori') -> nullable();
            $table->string('about') -> nullable();
            $table->string('about_body') -> nullable();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};
