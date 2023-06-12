<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'uz' => 'Naqd',
                'en' => 'Cash',
            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'Click',
                'en' => 'Click',
            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'Payme',
                'en' => 'Payme',
            ],
        ]);
    }
}
