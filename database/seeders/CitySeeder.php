<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name' => 'Москва',
            'slug' => 'msc',
        ]);

        City::create([
            'name' => 'Санкт-Петербург',
            'slug' => 'spb',
        ]);

        City::create([
            'name' => 'Новосибирск',
            'slug' => 'nsk',
        ]);

        City::create([
            'name' => 'Екатеринбург',
            'slug' => 'ekb',
        ]);

        City::create([
            'name' => 'Казань',
            'slug' => 'kzn',
        ]);
    }
}
