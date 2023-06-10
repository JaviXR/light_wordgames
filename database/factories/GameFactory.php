<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'duration' => $this->faker->randomFloat(2, 1, 30),
            'type_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
