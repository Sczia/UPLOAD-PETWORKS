<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Dr. Cecille Sy'],
            ['name' => 'Dr. One'],
            ['name' => 'Dr. Two'],
        ];
        foreach ($data as $item) {
            Doctor::create($item);
        }
    }
}
