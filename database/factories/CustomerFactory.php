<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'blocked' => fake()->boolean(),
            'surname' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email()
        ];
    }
}
