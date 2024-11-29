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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->float('prix');
            $table->integer('quantite');
            $table->text('description');
            $table->foreignId('personne_id') // La clé étrangère qui relie le produit à une personne
            ->constrained('personnes') // Fais la contrainte avec la table 'personnes'
            ->onDelete('cascade'); // Supprime les produits associés si la personne est supprimée
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
