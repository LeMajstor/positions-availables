<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'street' => $this->faker->streetName,
            'number' => $this->faker->buildingNumber,
            'city' => $this->faker->city,
            'district' => $this->faker->state,
            'country' => $this->faker->country
        ];
    }
}
