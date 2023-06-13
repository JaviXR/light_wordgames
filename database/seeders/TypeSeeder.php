<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the User model seeds.
     */
    public static function seed(): void
    {
        Type::factory()->createMany(
            [
                [
                    'name' => 'Single Option',
                    'options' => 1,
                ],
                [
                    'name' => 'True/False',
                    'options' => 2,
                ],
                [
                    'name' => 'Multiple Option',
                    'options' => 4,
                ],
                [
                    'name' => 'Word Set',
                    'options' => 0,
                ]
            ]);
        //Type::factory(3);
    }
}
