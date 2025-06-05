<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'Ariane Ko', 'age' => 24, 'gender' => 'male', 'address' => '123 Main St'],
            ['name' => 'Ariane gyapon ko', 'age' => 24, 'gender' => 'male gyapon', 'address' => 'Cebu'],
            ['name' => 'Siya ra', 'age' => 19, 'gender' => 'female', 'address' => 'Dumagueete'],
        ]);
    }
}
