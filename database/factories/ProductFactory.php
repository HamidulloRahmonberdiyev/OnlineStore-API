<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => rand(1,4),
            'name' => [
                'uz' => fake()->sentence(2),
                'en' => 'Product',
            ],
            'price' => rand(80000, 1000000),
            'description' => [
                'uz' => 'Mahsulot o\'ta sifatli va hamyonbob narxda.',
                'en' => fake()->paragraph(5),
            ],
        ];
    }
}
