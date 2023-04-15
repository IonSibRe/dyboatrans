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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("descShort");
            $table->string("price");
            $table->longText("descLong");
            $table->string("date");
            $table->string("departure");
            $table->string("priceIncludes");
            $table->string("priceNotIncludes");
            $table->string("images");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
