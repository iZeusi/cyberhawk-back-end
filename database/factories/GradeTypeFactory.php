<?php

namespace Database\Factories;

use App\Models\GradeType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GradeType>
 */
class GradeTypeFactory extends Factory
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
