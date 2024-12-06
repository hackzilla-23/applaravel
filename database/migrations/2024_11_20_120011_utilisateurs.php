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
        //creer la table utilisateur

        Schema::create("utilisateurs", function (Blueprint $table) {

            // $table-> id();
            $table->bigIncrements('utilisateur_id');
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            $table->string("age");
            $table->string("date_naissance");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Supprimer la table utilisateurs

        Schema::dropIfExists("utilisateurs");
    }
};
