<?php

namespace Database\Seeders;

use App\Models\appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        appointment::create([
            'user_id' => random_int(1, 5),
            'doctor_details_id' =>random_int(1, 5),
            'schedule_id' =>random_int(1, 2),
            'is_appointed' => boolval(false),
        ]);
    }
}
