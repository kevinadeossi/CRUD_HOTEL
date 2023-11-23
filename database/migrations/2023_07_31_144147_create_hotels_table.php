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
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id_hotel');
            $table->String('name')->unique();
            $table->String('description');
            $table->String('bedroom_name');
            $table->String('price');
            $table->String('beds');
            $table->String('max_adult');
            $table->String('child_number');
            $table->String('attributes');
            $table->String('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
