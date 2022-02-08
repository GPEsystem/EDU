<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model= \App\Models\Product::class;

    public function definition()
    {
        return [
            'Tilte'=> $this->faker->title(),
            'Description'=> $this->faker->paragraph(),
            'Quantity'=> $this->faker->randomDigit(),
            'Price'=> $this->faker->randomFloat(),              
        ];
    }
}
