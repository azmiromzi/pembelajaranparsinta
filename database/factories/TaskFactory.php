<?php

namespace Database\Factories;
use App\Http\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'list' => $this->faker->sentence(mt_rand(2, 4)),
            'mark' => mt_rand(0, 1)
        ];
    }
}
