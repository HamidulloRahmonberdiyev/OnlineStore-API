<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        Attribute::create(['name' => 'Color']);
        Attribute::create(['name' => 'Size']);
        Attribute::create(['name' => 'Material']);
    }
}