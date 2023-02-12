<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $year = $this->faker->numberBetween(1, 4);
        $yearLetters = ['A', 'B', 'C', 'D'];
        return [
            'ordinal' => $yearLetters[$year - 1] . $this->faker->unique()->numberBetween(1, 12),
            'year' => $year,
            'size' => $this->faker->numberBetween(30, 70)
        ];
    }
}
