<?php

namespace Database\Factories;

use App\Models\User;
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
            "nom" => fake()->name(),
            "prix" => fake()->randomNumber(2),
            "quantite" => fake()->numberBetween(1, 100),
            "description" => fake()->text(),
            "personne_id" => User::factory()->create()->id,
            // "image" => fake()->image('public/images', 640, 480, 'product'),
        ];
    }
}
