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
                'title' => 'Apel Fuji',
                'description' => 'Apel jepang yang enak dan manis.',
                'image' => '',
            ],
            [
                'title' => 'Pisang Raja',
                'description' => 'Pisang legendaris yang manis.',
                'image' => '',
            ],
            [
                'title' => 'Lemon Kuning',
                'description' => 'Lemon dengan rasa asam.',
                'image' => '',
            ],
        ];

        foreach ($promotions as $promo) {
            Promotion::create($promo);
        }
    }
}