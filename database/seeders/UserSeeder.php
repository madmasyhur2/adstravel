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
        User::create([
            'name' => 'Muhammad Masyhur',
            'email' => 'muhammadmasyhur2@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081234567890'
        ]);

        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '08123123123'
        ]);
    }
}
