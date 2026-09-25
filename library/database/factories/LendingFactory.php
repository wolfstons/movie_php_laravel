<?php

namespace Database\Factories;

use App\Models\Copy;
use App\Models\Lending;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lending>
 */
class LendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::fake()->random()->id(),
            "copy_id" => Copy::fake()->random()->id(),
            "start" => now(),
        ];
    }
}
