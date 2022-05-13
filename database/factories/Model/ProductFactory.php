<?php

namespace Database\Factories\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'detail' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100, 1000),
            'stock' => $this->faker->randomDigit,
            'discount' => $this->faker->numberBetween(5, 30)
        ];
    }
}
