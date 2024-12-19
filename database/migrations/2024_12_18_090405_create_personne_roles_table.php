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
        Schema::create('personne_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_role')->references('id')->on('roles');
            $table->foreignId('id_personne')->references('id')->on('personne');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personne_roles');
    }
};
