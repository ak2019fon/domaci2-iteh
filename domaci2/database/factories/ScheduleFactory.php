<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        return [
            'day' => $days[$this->faker->numberBetween(0, 4)],
            'from' => $this->faker->time(),
            'to' => $this->faker->time(),
            'student_group_id' => $this->faker->numberBetween(1, 8),
            'classroom_id' => $this->faker->numberBetween(1, 15)
        ];
    }
}
