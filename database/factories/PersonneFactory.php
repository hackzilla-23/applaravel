<?php

namespace Database\Factories;

use App\Models\Pays;
use App\Models\User;
use App\Models\Personne;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personne>
 */
class PersonneFactory extends Factory
{
    protected $model = Personne::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // "id" => Personne::factory()->create()->id,
            "nom"=>Str::random(10),
            "prenom"=>Str::random(10),
            "email"=>Str::random(10).'@gmail.com',
            "age" => fake()->numberBetween(1,100),
            "password" =>bcrypt(Str::random(10)),
            'images'=>Str::random(5).'.jpg',
            'id_ville' =>fake()->randomNumber(1)
        ];
    }
}
