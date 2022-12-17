<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'card_number'=>$this->faker->numberBetween(100000,999999).'',
            'expiration_date'=>$this->faker->date(),
            'client_account_id'=>$this->faker->numberBetween(1,10),
            'card_manufacturer_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
