<?php

namespace Database\Factories;

use App\Models\Turbine;
use App\Models\WindFarm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Turbine>
 */
class TurbineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'farm_id' => WindFarm::factory(),
            'lat' => $this->faker->latitude(),
            'lng' => $this->faker->longitude(),
        ];
    }
}
