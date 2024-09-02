<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_name' => $this->faker->name(),
            'instructor_name' => $this->faker->name(),
            'daily_addmission' => $this->faker->randomFloat(2, 0, 1000),
            'total_addmission' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
