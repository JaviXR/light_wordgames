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
                    'name' => 'SingleOption',
                    'options' => 1,
                ],
                [
                    'name' => 'TrueFalse',
                    'options' => 2,
                ],
                [
                    'name' => 'MultipleOption',
                    'options' => 4,
                ],
                [
                    'name' => 'WordSet',
                    'options' => 0,
                ]
            ]);
        //Type::factory(3);
    }
}
