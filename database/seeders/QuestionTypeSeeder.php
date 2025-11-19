<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_types')->insert([
            [
                'title' => 'Verbal Ability',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Analytical Ability',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Numerical Ability',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Electrical Engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Computer Science',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mechanical Engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Civil Engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Electronics and Communication',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
