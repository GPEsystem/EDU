<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{
    protected $model= \App\Models\Supplier::class;

    public function definition()
    {
        return [
            'Name'=> $this->faker->title(),
            'Address'=> $this->faker->address(),
        ];
    }
}
