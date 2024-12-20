<?php

namespace Database\Seeders;

use App\Models\Caption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CaptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Caption::create([
            'user_id' => 1,
            'name' => 'General Reployment 2024',
            'slug' => Str::slug('General Reployment 2024'),
        ]);
    }
}
