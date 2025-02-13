<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']),
            'user_id' => User::factory(),
            'datetime' => $this->faker->dateTime(),
            'paid' => $this->faker->boolean(),
            'notes' => $this->faker->paragraph(),
            'satisfaction' => $this->faker->optional()->numberBetween(0, 10)
        ];
    }
}
