<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'John Doe',
                    'fk_department' => 1,
                    'fk_designation' => 1,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],
                [
                    'name' => 'Tommy Mark',
                    'fk_department' => 2,
                    'fk_designation' => 4,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],
                [
                    'name' => 'Sharon Naz',
                    'fk_department' => 2,
                    'fk_designation' => 2,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],
                [
                    'name' => 'Rowan Lord',
                    'fk_department' => 5,
                    'fk_designation' => 5,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],
                [
                    'name' => 'Chris Hems',
                    'fk_department' => 4,
                    'fk_designation' => 4,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],
                [
                    'name' => 'Jeff Atlantis',
                    'fk_department' => 3,
                    'fk_designation' => 3,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],
                [
                    'name' => 'Albert Joan',
                    'fk_department' => 3,
                    'fk_designation' => 3,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],
                [
                    'name' => 'Brad Josh',
                    'fk_department' => 5,
                    'fk_designation' => 2,
                    'phone_number' => '1234567890',
                    'created_at'=> now()
                ],


            ]);
        }
    }
