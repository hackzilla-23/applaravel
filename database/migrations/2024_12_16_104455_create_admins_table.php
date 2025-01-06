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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
<<<<<<<< HEAD:database/migrations/2024_12_11_101205_create_clients_table.php
            $table->foreignId('addr_id')->constrained('adresses', 'id');
========
            $table->string('password');
>>>>>>>> 88098fb4637b1122956374463abf67268973bb73:database/migrations/2024_12_16_104455_create_admins_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};