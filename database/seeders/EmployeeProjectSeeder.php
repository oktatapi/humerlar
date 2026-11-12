<?php

namespace Database\Seeders;

use App\Models\EmployeeProject;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeProject::insert([
            [
                'employeeId' => 1,
                'projectId' => 1,
                'joinedAt' => '2026-11-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employeeId' => 2,
                'projectId' => 1,
                'joinedAt' => '2026-11-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employeeId' => 3,
                'projectId' => 2,
                'joinedAt' => '2026-11-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employeeId' => 3,
                'projectId' => 3,
                'joinedAt' => '2026-11-09',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
