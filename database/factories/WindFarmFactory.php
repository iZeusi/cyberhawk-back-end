<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WindFarm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WindFarm>
 */
class WindFarmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
