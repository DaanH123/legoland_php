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
        Schema::create('accomodaties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->character('500');
            $table->string('image_outside');
            $table->string('image_inside');
            $table->integer('price');
            $table->integer('max_persons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomodaties');
    }
};
