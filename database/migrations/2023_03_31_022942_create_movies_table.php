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
            $table->string('poster')->default('https://i.ebayimg.com/images/g/ujkAAOSwYEhjyt9a/s-l1600.jpg');
            // insert array
            $table->timestamps();
        });
    }

    /**
     * 
     * 'title','sinopsis','actor','poster','character','img_actor',
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};