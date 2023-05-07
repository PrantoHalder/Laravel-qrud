<?php

namespace Database\Seeders;

use App\Models\doctor_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DoctorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        doctor_type::create([
            'name' => Str::random(10),
        ]);
    }
}
