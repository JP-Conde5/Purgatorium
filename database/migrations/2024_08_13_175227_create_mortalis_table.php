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
        Schema::create('mortalis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nomeMortalis");
            $table->string("dataMorte");
            $table->string("religiao");
            $table->string("time");
            $table->string("filosofo");
            $table->string("pais");
            $table->integer("karma");
            $table->unsignedBigInteger("idDestination");
            $table->foreign("idDestination")->references("id")->on("destinations");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortalis');
    }
};
