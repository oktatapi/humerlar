<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'Erős István',
            'city' => 'Szeged',
            'salary' => 395,
            'positionId' => 1
        ]);
        Employee::create([
            'name' => 'Balogh János',
            'city' => 'Szeged',
            'salary' => 392,
            'positionId' => 2
        ]);
        Employee::create([
            'name' => 'Kiss Péter',
            'city' => 'Szeged',
            'salary' => 390,
            'positionId' => 3
        ]);
    }
}
