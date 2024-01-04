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
            'quantity' => 2,
            'total_price' => 100.00,
        ]);
        Transaction::create([
            'user_id' => 2,
            'travel_id' => 2,
            'quantity' => 1,
            'total_price' => 50.00,
        ]);
    }
}