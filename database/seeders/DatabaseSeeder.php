<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user1234'),
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
        ]);
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test1234'),
        ]);
    }
}
