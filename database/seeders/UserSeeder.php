<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ])->assignRole('user');
        User::factory()->create([
            'name' => 'Ronald',
            'email' => 'ronaldmoran285@gmail.com',
        ])->assignRole('admin');
    }
}
