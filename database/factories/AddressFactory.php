<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;


class AddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'customer_id' => Customer::factory(),
            'city' => fake()->city(),
            'street' => fake()->streetName(),
            'house' => fake()->randomNumber(3),
            'floor' => fake()->randomNumber(2),
            'flat' => fake()->randomNumber(2),
            'intercom' => fake()->randomNumber(4)
        ];
    }
}

