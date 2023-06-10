<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the User model seeds.
     */
    public static function seed(): void
    {
        User::factory()->create([
            'name' => 'JaviXR',
            'password' => bcrypt('admin'),
            'email' => 'JaviXR@outlook.es',
        ]);

        User::factory(16)->create();
    }
}
