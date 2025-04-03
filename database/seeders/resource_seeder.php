<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;

class resource_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promotions = [
            [
                'title' => 'Genshin Impact',
                'description' => 'Game Open World RPG yang menhadirkan tema petualangan disertai dengan berbagai karakter yang menarik.',
                'image' => '',
            ],
            [
                'title' => 'Honkai:Star Rail',
                'description' => 'Game Turn Based RPG yang disertai dengan konsep open world yang semakin membuat game lebih menarik.',
                'image' => '',
            ],
            [
                'title' => 'Mobile Legends:Bang Bang',
                'description' => 'Game MOBA Android yang menyajikan pertarungan fenomenal yang mempertemukan 10 pemain.',
                'image' => '',
            ],
        ];

        foreach ($promotions as $promo) {
            Promotion::create($promo);
        }
    }
}