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
        //la creation de la table utilisateur
        Schema::create('utilisateurs', function (Blueprint $table){
            // $table->id();
            // $table->bigIncrements('id_utilisateur'); on l'utilise pour personnaliser l'id en id_utilisateur.
            // $table->primaryKey('num_compte'); // ou $table->bigIncrements('num_compte')
            $table->bigIncrements('id_utilisateur');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->date('date_naissance');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('utilisateurs');
    }
};
