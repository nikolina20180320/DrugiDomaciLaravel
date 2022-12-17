<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientAccount>
 */
class ClientAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'account_number'=>$this->faker->numberBetween(100,200).'-'.$this->faker->numberBetween(1,999).'-'.$this->faker->numberBetween(10,99),
            'balance'=>$this->faker->randomFloat(2,0,700)
        ];
    }
}
