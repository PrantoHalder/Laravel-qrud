<?php

namespace Database\Seeders;

use App\Models\doctor_detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DoctorDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        doctor_detail::create([
            'user_id' => random_int(1,5),
            'doctor_type_id' => random_int(1,2),
            'gender' => Str::random(5),
            'degree' =>Str::random(10),
        ]);
    }
}
