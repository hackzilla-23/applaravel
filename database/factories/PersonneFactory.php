<?php

namespace Database\Factories;

use App\Models\Personne;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personne>
 */
class PersonneFactory extends Factory
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
            "prenom"=>fake()->randomNumber(2),
            "email"=>fake()->numberBetween(1,20),
            "password" =>Str::random(10),
            "age" => fake()->numberBetween(1,100),
            "id" => Personne::factory()->create()->id
        ];
    }
}
