<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::factory(10)->create();

        // Role::factory()->create([
        // 'nom_role' => 'admin',
        // ]);
    }
}
