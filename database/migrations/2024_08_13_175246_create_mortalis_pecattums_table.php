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
        Schema::create('mortalis_pecattums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idMortalis');
            $table->unsignedBigInteger('idPecattum');
            $table->foreign('idMortalis')->references('id')->on('mortalis');
            $table->foreign('idPecattum')->references('id')->on('pecattums');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortalis_pecattums');
    }
};
