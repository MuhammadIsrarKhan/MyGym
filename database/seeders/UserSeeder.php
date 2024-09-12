<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'israr',
            'email' => 'israr@example.com',
            'password' => 'Pa$$w0rd!',
        ]);
        User::factory()->create([
            'name' => 'jhon',
            'email' => 'jhon@example.com',
            'password' => 'Pa$$w0rd!',
            'role' => 'instructor'
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'Pa$$w0rd!',
            'role' => 'admin'
        ]);
        User::factory()->count(10)->create();
        User::factory()->count(10)->create([
            'role' => 'instructor'
        ]);
    }
}
