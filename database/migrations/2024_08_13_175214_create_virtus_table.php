<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('virtus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomeVirtus');
            $table->string('descricao');
            $table->integer('karma');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('virtus');
    }
};
