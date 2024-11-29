<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::factory(10)->create();
    }
}
