<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::updateOrcreate([
            'name' => 'mari',
            'email' => 'mari@valahol.lan',
            'password' => Hash::make('titok')
        ]);

        $this->call([
            EmployeeSeeder::class,
            PositionSeeder::class,
            ProjectSeeder::class,
            EmployeeProjectSeeder::class,
            UserSeeder::class
        ]);
    }
}
