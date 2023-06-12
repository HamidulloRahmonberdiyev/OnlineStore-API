<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        User::find(2)->addresses()->create([
            'latitude' => '125.21544778',
            'longtitude' => '6884.51256464164',
            'region' => 'Navoiy',
            'district' => 'Xatirchi',
            'street' => '1-guzar',
            'home' => '126-uy',
        ]);
    }
}
