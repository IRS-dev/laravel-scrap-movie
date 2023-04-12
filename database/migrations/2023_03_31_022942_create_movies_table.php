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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('-');
            $table->string('sinopsis')->default('no sinaposis yet');
            $table->string('genre')->default('no genre yet');
            $table->string('actor')->default('no actor yet');
            $table->string('poster')->default('posters/X1XjODPECzy0yDDLl8vItgZI8WUomGCGiSSbemKl.jpg');
            $table->integer('rating')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};