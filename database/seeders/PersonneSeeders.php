<?php

namespace Database\Seeders;

use App\Models\Personne;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonneSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Personne::factory(10)->create();
    }
}
