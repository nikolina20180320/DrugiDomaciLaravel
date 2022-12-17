<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CardManufacturer>
 */
class CardManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'legal_name'=>$this->faker->company,
            'name'=>$this->faker->catchPhrase,
            'location'=>$this->faker->address
        ];
    }
}
