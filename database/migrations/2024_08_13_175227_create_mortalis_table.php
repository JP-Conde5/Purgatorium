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
            $table->string("anoMorte");
            $table->string("religiao");
            $table->string("time");
            $table->string("filosofo");
            $table->string("nacionalidade");
            $table->integer("karma");
            $table->string("destination");
            /*$table->unsignedBigInteger("idVirtus");
            $table->unsignedBigInteger("idPecattum");
            $table->foreign("idVirtus")->references("id")->on("mortalis_virtus");
            $table->foreign("idPecattum")->references("id")->on("mortalis_pecattums");*/
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
