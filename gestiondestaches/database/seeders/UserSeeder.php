<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User One',
            'email' => 'userone@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'User Two',
            'email' => 'usertwo@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'User Three',
            'email' => 'userthree@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
