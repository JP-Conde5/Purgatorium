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
        Schema::create('mortalis_virtus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mortalis_id');
            $table->unsignedBigInteger('virtus_id');
            $table->foreign('mortalis_id')->references('id')->on('mortalis');
            $table->foreign('virtus_id')->references('id')->on('virtus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortalis_virtus');
    }
};
