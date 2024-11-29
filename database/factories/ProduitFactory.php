<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nom"=>fake()->name(),
            "prix"=>fake()->randomNumber(2),
            "quantite"=>fake()->numberBetween(1,20),
            "description" =>Str::random(10),
            "personne_id" => User::factory()->create()->id,
        ];
    }
}
