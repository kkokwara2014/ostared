<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::create([
            'name' => 'School of Business Studies',
            'slug' => Str::slug('School of Business Studies'),
        ]);
        Division::create([
            'name' => 'School of Engineering Technology',
            'slug' => Str::slug('School of Engineering Technology'),
        ]);
        Division::create([
            'name' => 'School of Environmental Design',
            'slug' => Str::slug('School of Environmental Design'),
        ]);
        Division::create([
            'name' => 'School of Industrial Technology',
            'slug' => Str::slug('School of Industrial Technology'),
        ]);
        Division::create([
            'name' => 'School of General & Basic Studies',
            'slug' => Str::slug('School of General & Basic Studies'),
        ]);
        Division::create([
            'name' => 'Rectory',
            'slug' => Str::slug('Rectory'),
        ]);
        Division::create([
            'name' => 'Registry',
            'slug' => Str::slug('Registry'),
        ]);
        Division::create([
            'name' => 'Bursary',
            'slug' => Str::slug('Bursary'),
        ]);
        Division::create([
            'name' => 'Works and Maintenance Services',
            'slug' => Str::slug('Works and Maintenance Services'),
        ]);
        Division::create([
            'name' => 'Polytechnic Library',
            'slug' => Str::slug('Polytechnic Library'),
        ]);
        Division::create([
            'name' => 'School of Science',
            'slug' => Str::slug('School of Science'),
        ]);
        Division::create([
            'name' => 'Medical Centre',
            'slug' => Str::slug('Medical Centre'),
        ]);
    }
}
