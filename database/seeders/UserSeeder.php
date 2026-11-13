<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'name' => 'super',
            'email' => 'super@valahol.lan',
            'password' => Hash::make('titok'),
            'role' => 'super'
        ]);
        User::updateOrCreate([
            'name' => 'admin',
            'email' => 'admin@valahol.lan',
            'password' => Hash::make('titok'),
            'role' => 'admin'
        ]);
        User::updateOrCreate([
            'name' => 'dani',
            'email' => 'dani@valahol.lan',
            'password' => Hash::make('titok'),
            'role' => 'user'
        ]);

    }
}
