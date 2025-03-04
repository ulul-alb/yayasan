<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder {
    public function run() {
        Program::insert([
            ['name' => 'Tiger Nixon', 'position' => 'System Architect', 'office' => 'Edinburgh', 'age' => 61, 'start_date' => '2023-04-25'],
            ['name' => 'Garrett Winters', 'position' => 'Accountant', 'office' => 'Tokyo', 'age' => 63, 'start_date' => '2023-07-25'],
            ['name' => 'Ashton Cox', 'position' => 'Junior Technical Author', 'office' => 'San Francisco', 'age' => 66, 'start_date' => '2019-01-12'],
            ['name' => 'Cedric Kelly', 'position' => 'Senior Javascript Developer', 'office' => 'Edinburgh', 'age' => 22, 'start_date' => '2022-03-29'],
            ['name' => 'Airi Satou', 'position' => 'Accountant', 'office' => 'Tokyo', 'age' => 33, 'start_date' => '2018-11-28'],
        ]);
    }
}


