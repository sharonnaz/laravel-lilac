<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Designation::insert([
            ['name' => 'Manager', 'created_at' => now()],
            ['name' => 'Developer', 'created_at' => now()],
            ['name' => 'Accountant', 'created_at' => now()],
            ['name' => 'Lead', 'created_at' => now()],
            ['name' => 'Designer', 'created_at' => now()],
        ]);
    }
}
