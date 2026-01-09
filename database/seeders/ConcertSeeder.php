<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concert;


class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concert::create([
            'concert_type' => 'Cat 1',
            'price' => 150000,
            'availability' => 100
        ]);
        Concert::create([
            'concert_type' => 'Cat 2',
            'price' => 300000,
            'availability' => 50
        ]);
        Concert::create([
            'concert_type' => 'Cat 3',
            'price' => 1450000,
            'availability' => 69
        ]);
    }
}
