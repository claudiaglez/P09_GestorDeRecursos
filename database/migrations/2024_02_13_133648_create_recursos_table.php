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
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->foreign('id_tipos')->references('id')->on('tipos');
            $table->string('titulo', 255);
            $table->foreign('id_stacks')->references('id')->on('stacks');
            $table->string('responsable', 100);
            $table->text('grabacion');
            $table->text('presentacion');
            $table->text('repo');
            $table->foreign('id_recursos_extras')->references('id')->on('recursos_extras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
