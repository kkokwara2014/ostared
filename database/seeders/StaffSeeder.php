<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'user_id' => 1,
            'rank_id' => 1,
            'gender_id' => 2,
            'firstname' => 'Jane',
            'lastname' => 'Oko',
            'othername' => '',
            'phone' => '07030167001',
            'deploydate' => date('Y-m-d H:i:s'),
        ]);
        Staff::create([
            'user_id' => 1,
            'rank_id' => 1,
            'gender_id' => 1,
            'firstname' => 'James',
            'lastname' => 'Ibiam',
            'othername' => '',
            'phone' => '07030167002',
            'deploydate' => date('Y-m-d H:i:s'),
        ]);
    }
}
