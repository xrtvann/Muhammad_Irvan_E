<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'nim' => $this->faker->unique()->numerify('2023########'),
            'gender' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'class' => 'TI-' . $this->faker->randomElement(['A', 'B', 'C', 'D']),
        ];
    }
}
