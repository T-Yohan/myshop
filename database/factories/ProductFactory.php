<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Jassigne un id par default unique qui corespond a  l'admin qui a creé le projet
            'user_id' => 1,
            // J'assigne un category_id a mes produit de facon aleatoire
            // J'ai crée 5 category
            // La fonction de php mt_rand() va attribuer aleatoirement une category de 1 a 5
            'category_id' => mt_rand(1,5),
            // Je génere grace a la fonction fake() des faux noms que j'assigne a la colonne name
            'name' => fake()->name(),
            // Je génere grace a la fonction fake() des faux text que jassigne a la colonne description
            'description' => fake()->text(),
            // J'assigne un prix a mes produit de facon aleatoire
            // La fonction de php mt_rand() va attribuer aleatoirement un prix allant de 50 a 1000
            'prix' => mt_rand(50,1000),
        ];
    }
}
