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
        //
        Schema::create("utilisateurs", function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements("utilisateur_id");
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            $table->integer("age");
            $table->date("date_naissance");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("utilisateurs");
    }
};
