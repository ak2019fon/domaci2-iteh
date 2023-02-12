<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hasPC = $this->faker->boolean(30);
        return [
            'name' => ($hasPC ? 'RC' : '') . $this->faker->unique->numberBetween(1, 40),
            'has_computers' => $hasPC,
            'size' => $this->faker->numberBetween(20, 80)
        ];
    }
}
