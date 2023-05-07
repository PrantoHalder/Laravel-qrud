<?php

namespace Database\Seeders;

use App\Models\doctor_detail;
use App\Models\doctor_schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DoctorscheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        doctor_schedule :: create([
           'doctor_detail_id' => random_int(1,2),
           'start_at' => time(),
           'end_at' => time(),
           'workdays' => json_encode(Str::random(10)),
           'address_id' => Str::random(10),
           'phone' => random_int(1,11),
        ]);
    }
}
