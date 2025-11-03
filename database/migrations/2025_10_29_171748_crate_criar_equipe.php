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
    Schema::create('equipe', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('equipe');
            $table->text('corredor1');
            $table->text('corredor2');
            $table->text('imagem');
            $table->text('cor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultado');
    }
};
