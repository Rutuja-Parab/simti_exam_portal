<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('months')->insert([
            [
                'title' => 'January',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'February',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'March',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'April',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'May',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'June',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'July',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'August',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'September',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'October',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'November',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'December',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
