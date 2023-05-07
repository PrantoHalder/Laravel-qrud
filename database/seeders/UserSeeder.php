<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'email' => Str::random(20),
            'username' => Str::random(5),
            'role' => Str::random(5),
            'password' => Hash::make('password'),
        ]);
    }
}
