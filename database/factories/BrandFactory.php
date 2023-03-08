<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand_name' =>$this->faker->word(),
            'type_id' => FactoryHelper::getRandomModelId(Type::class),
            'product_id' => FactoryHelper::getRandomModelId(Product::class)

        ];
    }
}
