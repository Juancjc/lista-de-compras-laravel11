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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('id_produto');
            $table->string('nome')->nullable()->default(null);
            //descricao
            $table->integer('quantidade')->nullable()->default(null);

            $table->timestamps();

            $table->unsignedBigInteger('id_lista');
            $table->foreign('id_lista')->references('id_lista')->on('listas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
