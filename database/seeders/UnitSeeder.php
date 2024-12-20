<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //school of business unnits
        Unit::create([
            'division_id' => 1,
            'name' => 'Accountancy',
            'slug' => Str::slug('Accountancy'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'Business Administration and Management',
            'slug' => Str::slug('Business Administration and Management'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'Office Technology and Management',
            'slug' => Str::slug('Office Technology and Management'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'Library and Information Science',
            'slug' => Str::slug('Library and Information Science'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'BAM HOD Office',
            'slug' => Str::slug('BAM HOD Office'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'Accountancy HOD Office',
            'slug' => Str::slug('Accountancy HOD Office'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'OTM HOD Office',
            'slug' => Str::slug('OTM HOD Office'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'LIS HOD Office',
            'slug' => Str::slug('LIS HOD Office'),
        ]);
        Unit::create([
            'division_id' => 1,
            'name' => 'Dean, School of Business Office',
            'slug' => Str::slug('Dean, School of Business Office'),
        ]);
        //school of engineering technology division
        Unit::create([
            'division_id' => 2,
            'name' => 'Electrical/Electronics Technology',
            'slug' => Str::slug('Electrical/Electronics Technology'),
        ]);
        Unit::create([
            'division_id' => 2,
            'name' => 'Civil Engineering Technology',
            'slug' => Str::slug('Civil Engineering Technology'),
        ]);
        Unit::create([
            'division_id' => 2,
            'name' => 'Computer Engineering Technology',
            'slug' => Str::slug('Computer Engineering Technology'),
        ]);
        Unit::create([
            'division_id' => 2,
            'name' => 'Electrical HOD Office',
            'slug' => Str::slug('Electrical HOD Office'),
        ]);
        Unit::create([
            'division_id' => 2,
            'name' => 'Civil HOD Office',
            'slug' => Str::slug('Civil HOD Office'),
        ]);
        Unit::create([
            'division_id' => 2,
            'name' => 'Computer Engineering HOD Office',
            'slug' => Str::slug('Computer Engineering HOD Office'),
        ]);
        Unit::create([
            'division_id' => 2,
            'name' => 'Dean, School of Engineering Office',
            'slug' => Str::slug('Dean, School of Engineering Office'),
        ]);

        //school of science division
        Unit::create([
            'division_id' => 11,
            'name' => 'Computer Science',
            'slug' => Str::slug('Computer Science'),
        ]);
        Unit::create([
            'division_id' => 11,
            'name' => 'Maths and Statistics',
            'slug' => Str::slug('Maths and Statistics'),
        ]);
        Unit::create([
            'division_id' => 11,
            'name' => 'Science Laboratory Technology',
            'slug' => Str::slug('Science Laboratory Technology'),
        ]);
        Unit::create([
            'division_id' => 11,
            'name' => 'Pharmaceutical Technology',
            'slug' => Str::slug('Pharmaceutical Technology'),
        ]);
        Unit::create([
            'division_id' => 11,
            'name' => 'Computer Science HOD Office',
            'slug' => Str::slug('Computer Science HOD Office'),
        ]);
        Unit::create([
            'division_id' => 11,
            'name' => 'Maths & Stat. HOD Office',
            'slug' => Str::slug('Maths & Stat. HOD Office'),
        ]);
        Unit::create([
            'division_id' => 11,
            'name' => 'SLT HOD Office',
            'slug' => Str::slug('SLT HOD Office'),
        ]);
        Unit::create([
            'division_id' => 11,
            'name' => 'Dean, School of Science Office',
            'slug' => Str::slug('Dean, School of Science Office'),
        ]);

        // Rectory division units
        Unit::create([
            'division_id' => 6,
            'name' => 'Deputy Rectory Academic',
            'slug' => Str::slug('Deputy Rectory Academic'),
        ]);
        Unit::create([
            'division_id' => 6,
            'name' => 'Deputy Rectory Administration',
            'slug' => Str::slug('Deputy Rectory Administration'),
        ]);
        Unit::create([
            'division_id' => 6,
            'name' => 'Information and Communication Technology (ICT)',
            'slug' => Str::slug('Information and Communication Technology (ICT)'),
        ]);
        Unit::create([
            'division_id' => 6,
            'name' => 'Student Affairs',
            'slug' => Str::slug('Student Affairs'),
        ]);
        Unit::create([
            'division_id' => 6,
            'name' => 'HOD Student Affairs',
            'slug' => Str::slug('HOD Student Affairs'),
        ]);
        Unit::create([
            'division_id' => 6,
            'name' => 'Dean Office, Student Affairs',
            'slug' => Str::slug('Dean Office, Student Affairs'),
        ]);
        Unit::create([
            'division_id' => 6,
            'name' => 'Continuing Education',
            'slug' => Str::slug('Continuing Education'),
        ]);
    }
}
