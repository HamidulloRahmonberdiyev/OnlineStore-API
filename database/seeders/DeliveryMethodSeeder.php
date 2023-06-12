<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tekin',
                'en' => 'Free',
            ],
            'estimated_time' => [
                'uz' => '1 hafta',
                'en' => 'Between week',
            ],
            'price' => 0,
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standart',
                'en' => 'Standart',
            ],
            'estimated_time' => [
                'uz' => '3 kun ichida',
                'en' => 'Between 3 days',
            ],
            'price' => 20000,
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tezkor',
                'en' => 'Express',
            ],
            'estimated_time' => [
                'uz' => '1 kun',
                'en' => '1 day',
            ],
            'price' => 35000,
        ]);
    }
}
