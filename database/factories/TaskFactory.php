<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'priority' => fake()->randomElement(['low', 'high']),
            'description' => fake()->realText(500),
            /* 'skill' => fake()->numberBetween(0, 5),  smallest number and highest number*/
            'team_id' => Team::inRandomOrder()->first()->id,
        ];
    }
}
