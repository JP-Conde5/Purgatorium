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
        Schema::create('mortalisVirtus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idMortalis');
            $table->unsignedBigInteger('idVirtus');
            $table->foreign('idMortalis')->references('id')->on('mortalis');
            $table->foreign('idVirtus')->references('id')->on('virtus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortalisVirtus');
    }
};
