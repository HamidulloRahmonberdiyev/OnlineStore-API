<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
        ]);

        Role::create([
            'name' => 'Manager',
        ]);

        Role::create([
            'name' => 'Customer',
        ]);

    }
}
