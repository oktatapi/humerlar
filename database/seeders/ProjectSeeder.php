<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::insert([
            [
                'name' => 'Pompadúr',
                'description' => 'Vállalati weboldal',
                'startDate' => '2026-11-09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Projekt 2',
                'description' => 'Vállalati weboldal',
                'startDate' => '2026-11-09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Projekct 3',
                'description' => 'Teszt projekt',
                'startDate' => '2026-11-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
