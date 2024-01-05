<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Travel;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Travel::create([
            'title' => 'Bromo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Bromo, Kab. Pasuruan',
            'departure_time' => '2024-01-01 08:00:00',
            'arrival_time' => '2024-01-04 10:00:00',
            'price' => 300000
        ]);

        Travel::create([
            'title' => 'Banyuwangi',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Banyuwangi, Jawa Timur',
            'departure_time' => '2024-01-05 08:00:00',
            'arrival_time' => '2024-01-08 10:00:00',
            'price' => 500000
        ]);

        Travel::create([
            'title' => 'Karimun Jawa',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Jepara, Jawa Tengah',
            'departure_time' => '2024-01-09 08:00:00',
            'arrival_time' => '2024-01-12 10:00:00',
            'price' => 600000
        ]);

        Travel::create([
            'title' => 'Bali',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Denpasar, Bali',
            'departure_time' => '2024-01-13 08:00:00',
            'arrival_time' => '2024-01-016 10:00:00',
            'price' => 3000000
        ]);

        Travel::create([
            'title' => 'Lombok',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Lombok, NTB',
            'departure_time' => '2024-01-17 08:00:00',
            'arrival_time' => '2024-01-20 10:00:00',
            'price' => 3500000
        ]);

        Travel::create([
            'title' => 'Labuan bajo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Manggarai, NTT',
            'departure_time' => '2024-01-21 08:00:00',
            'arrival_time' => '2024-01-24 10:00:00',
            'price' => 4000000
        ]);

        Travel::create([
            'title' => 'Sumba',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Sumba, NTT',
            'departure_time' => '2024-01-25 08:00:00',
            'arrival_time' => '2024-01-28 10:00:00',
            'price' => 4500000
        ]);

        Travel::create([
            'title' => 'Kupang',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Kupang, NTT',
            'departure_time' => '2024-01-29 08:00:00',
            'arrival_time' => '2024-02-01 10:00:00',
            'price' => 5500000
        ]);

        Travel::create([
            'title' => 'Raja Ampat',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Raja Ampat, Papua',
            'departure_time' => '2024-02-02 08:00:00',
            'arrival_time' => '2024-02-06 10:00:00',
            'price' => 9000000
        ]);

        Travel::create([
            'title' => 'Banda Neira',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Banda, Maluku',
            'departure_time' => '2024-02-07 08:00:00',
            'arrival_time' => '2024-02-11 10:00:00',
            'price' => 8500000
        ]);

        Travel::create([
            'title' => 'Nusa Penida',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Klungkung, Bali',
            'departure_time' => '2024-02-12 08:00:00',
            'arrival_time' => '2024-02-16 10:00:00',
            'price' => 5000000
        ]);

        Travel::create([
            'title' => 'Yogyakarta',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum magna a metus tincidunt, eget efficitur libero commodo.',
            'location' => 'Yogyakarta, DIY',
            'departure_time' => '2024-02-17 08:00:00',
            'arrival_time' => '2024-02-20 10:00:00',
            'price' => 2500000
        ]);
    }
}