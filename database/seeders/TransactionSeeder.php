<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'user_id' => 1,
            'travel_id' => 1,
            'name' => 'Muhammad',
            'phone_number' => '081234567890',
            'quantity' => 1,
            'city' => 'Jakarta',
            'total_price' => 50.00,
            'payment_status' => 'SUCCESS'
        ]);
        Transaction::create([
            'user_id' => 2,
            'travel_id' => 2,
            'name' => 'Muhammad',
            'phone_number' => '081234567890',
            'quantity' => 4,
            'city' => 'Malang',
            'total_price' => 200.00,
            'payment_status' => 'PROCESS'
        ]);
    }
}