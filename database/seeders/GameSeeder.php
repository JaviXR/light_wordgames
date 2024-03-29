<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the User model seeds.
     */
    public static function seed(): void
    {
        Game::factory()->createMany(
            [
                [
                    'name' => 'Trivia',
                    'description' => 'Juego de preguntas con respuesta abierta.',
                    'duration' => 10.00,
                    'type_id' => 1,
                ],
                [
                    'name' => 'The Hangman',
                    'description' => 'Juego de adivinar la palabra mediante prueba y error.',
                    'duration' => 5.00,
                    'type_id' => 4,
                ],
                [
                    'name' => 'Millionaire',
                    'description' => 'Juego de preguntas con 4 posibles respuestas.',
                    'duration' => 7.00,
                    'type_id' => 3,
                ]
            ]
        );

        Game::factory(3);
    }
}
