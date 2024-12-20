<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::create([
            'name' => 'Male',
            'slug' => Str::slug('Male'),
        ]);
        Gender::create([
            'name' => 'Female',
            'slug' => Str::slug('Female'),
        ]);
    }
}
