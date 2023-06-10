<?php

namespace Database\Factories;

use App\Models\Dataset;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatasetFactory extends Factory
{
    protected $model = Dataset::class;

    public function definition(): array
    {
        $type = $this->faker->numberBetween(1, 5);
        $data = null;
        $options = null;
        $question = null;

        if ($type === 1) {
            $options = $this->faker->text(30);
        } else if ($type === 2) {
            $options = [
                $this->faker->text(30),
                $this->faker->text(30),
            ];
        } else if ($type === 4) {
            $options = [
                $this->faker->text(30),
                $this->faker->text(30),
                $this->faker->text(30),
                $this->faker->text(30),
            ];
        }

        $options = json_encode($options);
        $data = $this->faker->parse(json_encode(
            [
                'main' => '{{ $question }}',
                'options' => '{{ $options }}',
            ]
        ));

        return [
            'name' => $this->faker->name,
            'user_id' => $this->faker->numberBetween(1, 17),
            'type_id' => $type,
            'data' => $data,
        ];
    }
}
