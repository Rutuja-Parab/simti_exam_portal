<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_methods')->insert([
            [
                'title' => 'Online Payment',
                'code' => 'online',
                'description' => 'Payment made through an online gateway or credit/debit card.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bank Transfer',
                'code' => 'wire_transfer',
                'description' => 'Payment made via bank transfer or deposit.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
