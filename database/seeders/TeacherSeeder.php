<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $teachers = [
            ['name' => 'John Doe'],
            ['name' => 'Jane Smith'],
            ['name' => 'Michael Johnson'],
            ['name' => 'Emily Davis'],
            ['name' => 'Robert Wilson'],
        ];
        DB::table('teachers')->insert($teachers);
    }
}
