<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'first_name' => 'Hamidullo',
            'last_name' => 'Rahmonerdiyev',
            'email' => 'hamidullo0760@gmail.com',
            'phone' => '+998912500760',
            'password' => Hash::make('hamidullo0760'),
        ]);

        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached([Role::find(3)])->create();
    }
}
