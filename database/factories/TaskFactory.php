<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{

    protected $model = Task::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creator_id' => User::factory()->create()->id,
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'status_id' => Status::factory()->create()->id,
        ];
    }
}
