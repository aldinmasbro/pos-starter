<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin Awal',
            'email' => 'aldin09@gmail.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' => '081342242340',
        ]);
    }
}
