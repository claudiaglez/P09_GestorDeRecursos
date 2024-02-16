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
            $table->unsignedBigInteger('id_tipos');
            $table->string('titulo', 255);
            $table->unsignedBigInteger('id_stacks');
            $table->string('responsable', 100);
            $table->text('grabacion');
            $table->text('presentacion');
            $table->text('repo');
            $table->unsignedBigInteger('id_extras');
            $table->timestamps();

            $table->foreign('id_tipos')->references('id')->on('tipos');
            $table->foreign('id_stacks')->references('id')->on('stacks');
            $table->foreign('id_extras')->references('id')->on('extras');
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
