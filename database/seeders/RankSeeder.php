<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Rank::create([
            'name' =>  'Deputy Registrar',
            'nextrank' => 'Registrar',
            'slug' => Str::slug('Deputy Registrar')
        ]);
        Rank::create([
            'name' => 'Principal Assistant Registrar',
            'nextrank' => 'Deputy Registrar',
            'slug' => Str::slug('Principal Assistant Registrar')
        ]);
        Rank::create([
            'name' => 'Senior Assistant Registrar',
            'nextrank' => 'Principal Assistant Registrar',
            'slug' => Str::slug('Senior Assistant Registrar')
        ]);
        Rank::create([
            'name' => 'Assistant Registrar',
            'nextrank' => 'Senior Assistant Registrar',
            'slug' => Str::slug('Assistant Registrar')
        ]);
        Rank::create([
            'name' => 'Admin Officer I',
            'nextrank' => 'Assistant Registrar',
            'slug' => Str::slug('Admin Officer I')
        ]);
        Rank::create([
            'name' => 'Admin Officer II',
            'nextrank' => 'Admin Officer I',
            'slug' => Str::slug('Admin Officer II')
        ]);
        Rank::create([
            'name' => 'Librarian II',
            'nextrank' => 'Librarian I',
            'slug' => Str::slug('Librarian II')
        ]);
        Rank::create([
            'name' => 'Librarian I',
            'nextrank' => 'Senior Librarian',
            'slug' => Str::slug('Librarian I')
        ]);
        Rank::create([
            'name' => 'Senior Librarian',
            'nextrank' => 'Principal Librarian',
            'slug' => Str::slug('Senior Librarian')
        ]);
        Rank::create([
            'name' => 'Principal Librarian',
            'nextrank' => 'Assistant Chief Librarian',
            'slug' => Str::slug('Principal Librarian')
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Librarian',
            'nextrank' => 'Chief Librarian',
            'slug' =>  Str::slug('Assistant Chief Librarian')
        ]);
        Rank::create([
            'name' =>  'Chief Librarian ',
            'nextrank' =>  'Chief Librarian ',
            'slug' => Str::slug('Chief Librarian')
        ]);
        Rank::create([
            'name' =>  'Polytechnic Librarian',
            'nextrank' => 'Polytechnic Librarian',
            'slug' =>  Str::slug('Polytechnic Librarian'),
        ]);
        Rank::create([
            'name' =>  'Porter',
            'nextrank' => 'Senior Porter',
            'slug' =>  Str::slug('Porter'),
        ]);
        Rank::create([
            'name' =>  'Senior Porter',
            'nextrank' => 'Chief Porter',
            'slug' =>  Str::slug('Senior Porter'),
        ]);
        Rank::create([
            'name' =>  'Chief Porter',
            'nextrank' => 'Chief Porter',
            'slug' =>  Str::slug('Chief Porter'),
        ]);
        Rank::create([
            'name' => 'Assistant Hostel Supervisor',
            'nextrank' => 'Hostel Supervisor',
            'slug' => Str::slug('Assistant Hostel Supervisor'),
        ]);
        Rank::create([
            'name' =>  'Hostel Supervisor',
            'nextrank' => 'Hostel Supervisor',
            'slug' =>  Str::slug('Hostel Supervisor'),
        ]);
        Rank::create([
            'name' =>  'Fireman Grade II',
            'nextrank' => 'Fireman Grade I',
            'slug' =>  Str::slug('Fireman Grade II'),
        ]);
        Rank::create([
            'name' =>  'Fireman Grade I',
            'nextrank' => 'Leading Fireman',
            'slug' =>  Str::slug('Fireman Grade I'),
        ]);
        Rank::create([
            'name' => 'Leading Fireman',
            'nextrank' => 'Senior Fireman',
            'slug' => Str::slug('Leading Fireman'),
        ]);
        Rank::create([
            'name' =>  'Senior Fireman',
            'nextrank' => 'Chief Fireman',
            'slug' =>  Str::slug('Senior Fireman'),
        ]);
        Rank::create([
            'name' =>  'Chief Fireman',
            'nextrank' => 'Chief Fireman',
            'slug' =>  Str::slug('Chief Fireman'),
        ]);
        Rank::create([
            'name' => 'Assistant Fire Superintendent',
            'nextrank' => 'Fire Superintendent',
            'slug' => Str::slug('Assistant Fire Superintendent'),
        ]);
        Rank::create([
            'name' => 'Fire Superintendent',
            'nextrank' => 'Higher Fire Superintendent',
            'slug' => Str::slug('Fire Superintendent'),
        ]);
        Rank::create([
            'name' => 'Higher Fire Superintendent',
            'nextrank' => 'Senior Fire Superintendent',
            'slug' => Str::slug('Higher Fire Superintendent'),
        ]);
        Rank::create([
            'name' => 'Senior Fire Superintendent',
            'nextrank' => 'Principal Fire Superintendent II',
            'slug' => Str::slug('Senior Fire Superintendent'),
        ]);
        Rank::create([
            'name' => 'Principal Fire Superintendent II',
            'nextrank' => 'Principal Fire Superintendent I',
            'slug' => Str::slug('Principal Fire Superintendent II'),
        ]);
        Rank::create([
            'name' => 'Principal Fire Superintendent I',
            'nextrank' => 'Assistant Chief Fire Superintendent',
            'slug' => Str::slug('Principal Fire Superintendent I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Fire Superintendent',
            'nextrank' => 'Chief Fire Superintendent',
            'slug' => Str::slug('Assistant Chief Fire Superintendent'),
        ]);
        Rank::create([
            'name' => 'Chief Fire Superintendent',
            'nextrank' => 'Chief Fire Superintendent',
            'slug' => Str::slug('Chief Fire Superintendent'),
        ]);
        Rank::create([
            'name' => 'Motor Driver',
            'nextrank' => 'Heavy Duty Vehicle Driver/Motor Driver Mechanic Grade II',
            'slug' => Str::slug('Motor Driver'),
        ]);
        Rank::create([
            'name' =>  'Heavy Duty Vehicle Driver/Motor Driver Mechanic Grade II',
            'nextrank' => 'Motor Driver/Mechanic Grade I',
            'slug' =>  Str::slug('Heavy Duty Vehicle Driver/Motor Driver Mechanic Grade II'),
        ]);
        Rank::create([
            'name' => 'Motor Driver/Mechanic Grade I',
            'nextrank' => 'Senior Motor Driver/Mechanic',
            'slug' => Str::slug('Motor Driver/Mechanic Grade I'),
        ]);
        Rank::create([
            'name' => 'Senior Motor Driver/Mechanic',
            'nextrank' => 'Chief Driver',
            'slug' => Str::slug('Senior Motor Driver/Mechanic'),
        ]);
        Rank::create([
            'name' => 'Chief Driver',
            'nextrank' => 'Chief Driver',
            'slug' => Str::slug('Chief Driver'),
        ]);
        Rank::create([
            'name' => 'Assistant Craftsman',
            'nextrank' => 'Craftsman',
            'slug' => Str::slug('Assistant Craftsman'),
        ]);
        Rank::create([
            'name' =>  'Craftsman',
            'nextrank' => 'Senior Craftsman',
            'slug' =>  Str::slug('Craftsman'),
        ]);
        Rank::create([
            'name' =>  'Senior Craftsman',
            'nextrank' => 'Foreman',
            'slug' =>  Str::slug('Senior Craftsman'),
        ]);
        Rank::create([
            'name' => 'Foreman',
            'nextrank' => 'Senior Foreman',
            'slug' => Str::slug('Foreman'),
        ]);
        Rank::create([
            'name' => 'Senior Foreman',
            'nextrank' => 'Senior Foreman',
            'slug' => Str::slug('Senior Foreman'),
        ]);
        Rank::create([
            'name' =>  'Assistant Technical Officer',
            'nextrank' => 'Technical Officer',
            'slug' =>  Str::slug('Assistant Technical Officer'),
        ]);
        Rank::create([
            'name' => 'Technical Officer',
            'nextrank' => 'Higher Technical Officer',
            'slug' => Str::slug('Technical Officer'),
        ]);
        Rank::create([
            'name' => 'Higher Technical Officer',
            'nextrank' => 'Senior Technical Officer',
            'slug' => Str::slug('Higher Technical Officer'),
        ]);
        Rank::create([
            'name' => 'Senior Technical Officer',
            'nextrank' => 'Principal Technical Officer II',
            'slug' => Str::slug('Senior Technical Officer'),
        ]);
        Rank::create([
            'name' => 'Principal Technical Officer II',
            'nextrank' => 'Principal Technical Officer I',
            'slug' => Str::slug('Principal Technical Officer II'),
        ]);
        Rank::create([
            'name' => 'Principal Technical Officer I',
            'nextrank' => 'Assistant Chief Technical Officer',
            'slug' => Str::slug('Principal Technical Officer I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Technical Officer',
            'nextrank' => 'Chief Technical Officer',
            'slug' => Str::slug('Assistant Chief Technical Officer'),
        ]);
        Rank::create([
            'name' =>  'Chief Technical Officer',
            'nextrank' => 'Chief Technical Officer',
            'slug' =>  Str::slug('Chief Technical Officer'),
        ]);
        Rank::create([
            'name' => 'Laboratory/Workshop Assistant II',
            'nextrank' => 'Laboratory/Workshop Assistant I',
            'slug' => Str::slug('Laboratory/Workshop Assistant II'),
        ]);
        Rank::create([
            'name' => 'Laboratory/Workshop Assistant I',
            'nextrank' => 'Senior Laboratory/Workshop Assistant',
            'slug' => Str::slug('Laboratory/Workshop Assistant I'),
        ]);
        Rank::create([
            'name' => 'Senior Laboratory/Workshop Assistant',
            'nextrank' => 'Chief Laboratory/Workshop Assistant',
            'slug' => Str::slug('Senior Laboratory/Workshop Assistant'),
        ]);
        Rank::create([
            'name' => 'Chief Laboratory/Workshop Assistant',
            'nextrank' => 'Chief Laboratory/Workshop Assistant',
            'slug' => Str::slug('Chief Laboratory/Workshop Assistant'),
        ]);
        Rank::create([
            'name' => 'Assistant Laboratory Technician',
            'nextrank' => 'Laboratory Technician',
            'slug' => Str::slug('Assistant Laboratory Technician'),
        ]);
        Rank::create([
            'name' =>  'Laboratory Technician',
            'nextrank' => 'Higher Laboratory Technician',
            'slug' =>  Str::slug('Laboratory Technician'),
        ]);
        Rank::create([
            'name' => 'Higher Laboratory Technician',
            'nextrank' => 'Senior Laboratory Technician',
            'slug' => Str::slug('Higher Laboratory Technician'),
        ]);
        Rank::create([
            'name' => 'Senior Laboratory Technician',
            'nextrank' => 'Principal Laboratory Technician',
            'slug' => Str::slug('Senior Laboratory Technician'),
        ]);
        Rank::create([
            'name' => 'Principal Laboratory Technician',
            'nextrank' => 'Principal Laboratory Technician',
            'slug' => Str::slug('Chief Laboratory Technician'),
        ]);
        Rank::create([
            'name' => 'Secreterial Assistant IV',
            'nextrank' => 'Secreterial Assistant III',
            'slug' => Str::slug('Secreterial Assistant IV'),
        ]);
        Rank::create([
            'name' =>  'Secreterial Assistant III',
            'nextrank' => 'Secreterial Assistant II',
            'slug' => Str::slug('Secreterial Assistant III'),
        ]);
        Rank::create([
            'name' => 'Secreterial Assistant II',
            'nextrank' => 'Secreterial Assistant I',
            'slug' => Str::slug('Secreterial Assistant II'),
        ]);
        Rank::create([
            'name' => 'Secreterial Assistant I',
            'nextrank' => 'Senior Secreterial Assistant II',
            'slug' => Str::slug('Secreterial Assistant I'),
        ]);
        Rank::create([
            'name' => 'Senior Secreterial Assistant II',
            'nextrank' => 'Senior Secreterial Assistant I',
            'slug' => Str::slug('Senior Secreterial Assistant II'),
        ]);
        Rank::create([
            'name' => 'Senior Secreterial Assistant I',
            'nextrank' => 'Chief Secretrial Assistant',
            'slug' => Str::slug('Senior Secreterial Assistant I'),
        ]);
        Rank::create([
            'name' => 'Chief Secretrial Assistant',
            'nextrank' => 'Chief Secretrial Assistant',
            'slug' => Str::slug('Chief Secretrial Assistant'),
        ]);
        Rank::create([
            'name' => 'Confidential Secretary III',
            'nextrank' => 'Confidential Secretary II',
            'slug' => Str::slug('Confidential Secretary III'),
        ]);
        Rank::create([
            'name' => 'Confidential Secretary II',
            'nextrank' => 'Confidential Secretary I',
            'slug' => Str::slug('Confidential Secretary II'),
        ]);
        Rank::create([
            'name' => 'Confidential Secretary I',
            'nextrank' => 'Senior Confidential Secretary',
            'slug' => Str::slug('Confidential Secretary I'),
        ]);
        Rank::create([
            'name' => 'Senior Confidential Secretary',
            'nextrank' => 'Principal Confidential Secretary II',
            'slug' => Str::slug('Senior Confidential Secretary'),
        ]);
        Rank::create([
            'name' => 'Principal Confidential Secretary II',
            'nextrank' => 'Principal Confidential Secretary I',
            'slug' => Str::slug('Principal Confidential Secretary II'),
        ]);
        Rank::create([
            'name' =>  'Principal Confidential Secretary I',
            'nextrank' => 'Assistant Chief Confidential Secretary',
            'slug' => Str::slug('Principal Confidential Secretary I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Confidential Secretary',
            'nextrank' => 'Chief Confidential Secretary',
            'slug' => Str::slug('Assistant Chief Confidential Secretary'),
        ]);
        Rank::create([
            'name' =>  'Chief Confidential Secretary',
            'nextrank' => 'Chief Confidential Secretary',
            'slug' => Str::slug('Chief Confidential Secretary'),
        ]);
        Rank::create([
            'name' =>  'Clerical Officer',
            'nextrank' => 'Senior Clerical Officer',
            'slug' => Str::slug('Clerical Officer'),
        ]);
        Rank::create([
            'name' =>  'Senior Clerical Officer',
            'nextrank' => 'Assistant Chief Clerical Officer',
            'slug' => Str::slug('Senior Clerical Officer'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Clerical Officer',
            'nextrank' => 'Chief Clerical Officer',
            'slug' => Str::slug('Assistant Chief Clerical Officer'),
        ]);
        Rank::create([
            'name' =>  'Chief Clerical Officer',
            'nextrank' => 'Chief Clerical Officer',
            'slug' => Str::slug('Chief Clerical Officer'),
        ]);
        Rank::create([
            'name' => 'Assistant Executive Officer',
            'nextrank' => 'Executive Officer',
            'slug' => Str::slug('Assistant Executive Officer'),
        ]);
        Rank::create([
            'name' =>  'Executive Officer',
            'nextrank' => 'Higher Executive Officer',
            'slug' => Str::slug('Executive Officer'),
        ]);
        Rank::create([
            'name' =>  'Higher Executive Officer',
            'nextrank' => 'Senior Executive Officer',
            'slug' => Str::slug('Higher Executive Officer'),
        ]);
        Rank::create([
            'name' => 'Senior Executive Officer',
            'nextrank' => 'Principal Executive Officer II',
            'slug' => Str::slug('Senior Executive Officer'),
        ]);
        Rank::create([
            'name' => 'Principal Executive Officer II',
            'nextrank' => 'Principal Executive Officer I',
            'slug' => Str::slug('Principal Executive Officer II'),
        ]);
        Rank::create([
            'name' => 'Principal Executive Officer I',
            'nextrank' => 'Assistant Chief Executive Officer',
            'slug' => Str::slug('Principal Executive Officer I'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Executive Officer',
            'nextrank' => 'Chief Executive Officer',
            'slug' => Str::slug('Assistant Chief Executive Officer'),
        ]);
        Rank::create([
            'name' => 'Chief Executive Officer',
            'nextrank' => 'Chief Executive Officer',
            'slug' => Str::slug('Chief Executive Officer'),
        ]);
        Rank::create([
            'name' =>  'Assistant Executive (Accounts & Audit) Officer',
            'nextrank' => 'Executive (Accounts & Audit) Officer',
            'slug' => Str::slug('Assistant Executive (Accounts & Audit) Officer'),
        ]);
        Rank::create([
            'name' => 'Executive (Accounts & Audit) Officer',
            'nextrank' => 'Higher Executive (Accounts & Audit) Officer',
            'slug' => Str::slug('Executive (Accounts & Audit) Officer'),
        ]);
        Rank::create([
            'name' =>  'Higher Executive (Accounts & Audit) Officer',
            'nextrank' => 'Senior Executive (Accounts & Audit) Officer',
            'slug' => Str::slug('Higher Executive (Accounts & Audit) Officer'),
        ]);
        Rank::create([
            'name' =>  'Senior Executive (Accounts & Audit) Officer',
            'nextrank' => 'Principal Executive (Accounts & Audit) Officer II',
            'slug' => Str::slug('Senior Executive (Accounts & Audit) Officer'),
        ]);
        Rank::create([
            'name' =>  'Principal Executive (Accounts & Audit) Officer II',
            'nextrank' => 'Principal Executive (Accounts & Audit) Officer I',
            'slug' => Str::slug('Principal Executive (Accounts & Audit) Officer II'),
        ]);
        Rank::create([
            'name' =>  'Principal Executive (Accounts & Audit) Officer I',
            'nextrank' => 'Assistant Chief Executive (Accounts & Audit) Officer',
            'slug' => Str::slug('Principal Executive (Accounts & Audit) Officer I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Executive (Accounts & Audit) Officer',
            'nextrank' => 'Chief Executive (Accounts & Audit) Officer',
            'slug' => Str::slug('Assistant Chief Executive (Accounts & Audit) Officer'),
        ]);
        Rank::create([
            'name' =>  'Chief Executive (Accounts & Audit) Officer',
            'nextrank' => 'Chief Executive (Accounts & Audit) Officer',
            'slug' => Str::slug('Chief Executive (Accounts & Audit) Officer'),
        ]);
        Rank::create([
            'name' => 'Assistant Executive (Procurement) Officer',
            'nextrank' => 'Executive (Procurement) Officer',
            'slug' => Str::slug('Assistant Executive (Procurement) Officer'),
        ]);
        Rank::create([
            'name' => 'Executive (Procurement) Officer',
            'nextrank' => 'Higher Executive (Procurement) Officer',
            'slug' => Str::slug('Executive (Procurement) Officer'),
        ]);
        Rank::create([
            'name' => 'Higher Executive (Procurement) Officer',
            'nextrank' => 'Senior Executive (Procurement) Officer',
            'slug' => Str::slug('Higher Executive (Procurement) Officer'),
        ]);
        Rank::create([
            'name' => 'Senior Executive (Procurement) Officer',
            'nextrank' => 'Principal Executive (Procurement) Officer II',
            'slug' => Str::slug('Senior Executive (Procurement) Officer'),
        ]);
        Rank::create([
            'name' =>  'Principal Executive (Procurement) Officer II',
            'nextrank' => 'Principal Executive (Procurement) Officer I',
            'slug' => Str::slug('Principal Executive (Procurement) Officer II'),
        ]);
        Rank::create([
            'name' => 'Principal Executive (Procurement) Officer I',
            'nextrank' => 'Assistant Chief Executive (Procurement) Officer',
            'slug' => Str::slug('Principal Executive (Procurement) Officer I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Executive (Procurement) Officer',
            'nextrank' => 'Chief Executive (Procurement) Officer',
            'slug' => Str::slug('Assistant Chief Executive (Procurement) Officer'),
        ]);
        Rank::create([
            'name' =>  'Chief Executive (Procurement) Officer',
            'nextrank' => 'Chief Executive (Procurement) Officer',
            'slug' => Str::slug('Chief Executive (Procurement) Officer'),
        ]);
        Rank::create([
            'name' => 'Storekeeper',
            'nextrank' => 'Senior Storekeeper',
            'slug' => Str::slug('Storekeeper'),
        ]);
        Rank::create([
            'name' =>  'Senior Storekeeper',
            'nextrank' => 'Assistant Chief Storekeeper',
            'slug' => Str::slug('Senior Storekeeper'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Storekeeper',
            'nextrank' => 'Chief Storekeeper',
            'slug' => Str::slug('Assistant Chief Storekeeper'),
        ]);
        Rank::create([
            'name' =>  'Chief Storekeeper',
            'nextrank' => 'Chief Storekeeper',
            'slug' => Str::slug('Chief Storekeeper'),
        ]);
        Rank::create([
            'name' =>  'Assistant Stores Officer',
            'nextrank' => 'Stores Officer',
            'slug' => Str::slug('Assistant Stores Officer'),
        ]);
        Rank::create([
            'name' => 'Stores Officer',
            'nextrank' => 'Higher Stores Officer',
            'slug' => Str::slug('Stores Officer'),
        ]);
        Rank::create([
            'name' =>  'Higher Stores Officer',
            'nextrank' => 'Senior Stores Officer',
            'slug' => Str::slug('Higher Stores Officer'),
        ]);
        Rank::create([
            'name' =>  'Senior Stores Officer',
            'nextrank' => 'Principal Stores Officer II',
            'slug' => Str::slug('Senior Stores Officer'),
        ]);
        Rank::create([
            'name' =>  'Principal Stores Officer II',
            'nextrank' => 'Principal Stores Officer I',
            'slug' => Str::slug('Principal Stores Officer II'),
        ]);
        Rank::create([
            'name' =>  'Principal Stores Officer I',
            'nextrank' => 'Assistant Chief Stores Officer',
            'slug' => Str::slug('Principal Stores Officer I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Stores Officer',
            'nextrank' => 'Chief Stores Officer',
            'slug' => Str::slug('Assistant Chief Stores Officer'),
        ]);
        Rank::create([
            'name' =>  'Chief Stores Officer',
            'nextrank' => 'Chief Stores Officer',
            'slug' => Str::slug('Chief Stores Officer'),
        ]);
        Rank::create([
            'name' =>  'Assistant Coach',
            'nextrank' => 'Coach',
            'slug' => Str::slug('Assistant Coach'),
        ]);
        Rank::create([
            'name' =>  'Coach',
            'nextrank' => 'Higher Coach',
            'slug' => Str::slug('Coach'),
        ]);
        Rank::create([
            'name' =>  'Higher Coach',
            'nextrank' => 'Senior Coach',
            'slug' => Str::slug('Higher Coach'),
        ]);
        Rank::create([
            'name' =>  'Senior Coach',
            'nextrank' => 'Principal Coach',
            'slug' => Str::slug('Senior Coach'),
        ]);
        Rank::create([
            'name' =>  'Principal Coach',
            'nextrank' => 'Assistant Chief Coach',
            'slug' => Str::slug('Principal Coach'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Coach',
            'nextrank' => 'Chief Coach',
            'slug' => Str::slug('Assistant Chief Coach'),
        ]);
        Rank::create([
            'name' =>  'Chief Coach',
            'nextrank' => 'Chief Coach',
            'slug' => Str::slug('Chief Coach'),
        ]);
        Rank::create([
            'name' =>  'Data Processing Assistant II',
            'nextrank' => 'Data Processing Assistant I',
            'slug' => Str::slug('Data Processing Assistant II'),
        ]);
        Rank::create([
            'name' =>  'Data Processing Assistant I',
            'nextrank' => 'Senior Data Processing Assistant',
            'slug' => Str::slug('Data Processing Assistant I'),
        ]);
        Rank::create([
            'name' =>  'Senior Data Processing Assistant',
            'nextrank' => 'Principal Data Processing Assistant',
            'slug' => Str::slug('Senior Data Processing Assistant'),
        ]);
        Rank::create([
            'name' =>  'Principal Data Processing Assistant',
            'nextrank' => 'Chief Data Processing Assistant',
            'slug' => Str::slug('Principal Data Processing Assistant'),
        ]);
        Rank::create([
            'name' =>  'Chief Data Processing Assistant',
            'nextrank' => 'Chief Data Processing Assistant',
            'slug' => Str::slug('Chief Data Processing Assistant'),
        ]);
        Rank::create([
            'name' =>  'Data Processing Officer',
            'nextrank' => 'Higher Data Processing Officer',
            'slug' => Str::slug('Data Processing Officer'),
        ]);
        Rank::create([
            'name' =>  'Higher Data Processing Officer',
            'nextrank' => 'Senior Data Processing Officer',
            'slug' => Str::slug('Higher Data Processing Officer'),
        ]);
        Rank::create([
            'name' => 'Senior Data Processing Officer',
            'nextrank' => 'Principal Data Processing Officer',
            'slug' => Str::slug('Senior Data Processing Officer'),
        ]);
        Rank::create([
            'name' =>  'Principal Data Processing Officer',
            'nextrank' => 'Assistant Chief Data Processing Officer',
            'slug' => Str::slug('Principal Data Processing Officer'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Data Processing Officer',
            'nextrank' => 'Chief Data Processing Officer',
            'slug' => Str::slug('Assistant Chief Data Processing Officer'),
        ]);
        Rank::create([
            'name' =>  'Chief Data Processing Officer',
            'nextrank' => 'Chief Data Processing Officer',
            'slug' => Str::slug('Chief Data Processing Officer'),
        ]);
        Rank::create([
            'name' =>  'Statistician II',
            'nextrank' => 'Statistician I',
            'slug' => Str::slug('Statistician II'),
        ]);
        Rank::create([
            'name' =>  'Statistician I',
            'nextrank' => 'Senior Statistician',
            'slug' => Str::slug('Statistician I'),
        ]);
        Rank::create([
            'name' =>  'Senior Statistician',
            'nextrank' => 'Principal Statistician',
            'slug' => Str::slug('Senior Statistician'),
        ]);
        Rank::create([
            'name' =>  'Principal Statistician',
            'nextrank' => 'Assistant Chief Statistician',
            'slug' => Str::slug('Principal Statistician'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Statistician',
            'nextrank' => 'Chief Statistician',
            'slug' => Str::slug('Assistant Chief Statistician'),
        ]);
        Rank::create([
            'name' =>  'Chief Statistician',
            'nextrank' => 'Chief Statistician',
            'slug' => Str::slug('Chief Statistician'),
        ]);
        Rank::create([
            'name' =>  'Programmer/System Analyst II',
            'nextrank' => 'Programmer/System Analyst I',
            'slug' => Str::slug('Programmer/System Analyst II'),
        ]);
        Rank::create([
            'name' =>  'Programmer/System Analyst I',
            'nextrank' => 'Senior Programmer/System Analyst',
            'slug' => Str::slug('Programmer/System Analyst I'),
        ]);
        Rank::create([
            'name' =>  'Senior Programmer/System Analyst',
            'nextrank' => 'Principal Programmer/System Analyst',
            'slug' => Str::slug('Senior Programmer/System Analyst'),
        ]);
        Rank::create([
            'name' =>  'Principal Programmer/System Analyst',
            'nextrank' => 'Assistant Chief Programmer/System Analyst',
            'slug' => Str::slug('Principal Programmer/System Analyst'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Programmer/System Analyst',
            'nextrank' => 'Chief Programmer/System Analyst',
            'slug' => Str::slug('Assistant Chief Programmer/System Analyst'),
        ]);
        Rank::create([
            'name' =>  'Chief Programmer/System Analyst',
            'nextrank' => 'Director (Programmer/System Analyst)',
            'slug' => Str::slug('Chief Programmer/System Analyst'),
        ]);
        Rank::create([
            'name' =>  'Director (Programmer/System Analyst)',
            'nextrank' => 'Director (Programmer/System Analyst)',
            'slug' => Str::slug('Director (Programmer/System Analyst)'),
        ]);
        Rank::create([
            'name' =>  'Medical Laboratory Scientist II',
            'nextrank' => 'Medical Laboratory Scientist I',
            'slug' => Str::slug('Medical Laboratory Scientist II'),
        ]);
        Rank::create([
            'name' =>  'Medical Laboratory Scientist I',
            'nextrank' => 'Senior Medical Laboratory Scientist',
            'slug' => Str::slug('Medical Laboratory Scientist I'),
        ]);
        Rank::create([
            'name' =>  'Senior Medical Laboratory Scientist',
            'nextrank' => 'Principal Medical Laboratory Scientist',
            'slug' => Str::slug('Senior Medical Laboratory Scientist'),
        ]);
        Rank::create([
            'name' => 'Principal Medical Laboratory Scientist',
            'nextrank' => 'Assistant Chief Medical Laboratory Scientist',
            'slug' => Str::slug('Principal Medical Laboratory Scientist'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Medical Laboratory Scientist',
            'nextrank' => 'Chief Medical Laboratory Scientist',
            'slug' => Str::slug('Assistant Chief Medical Laboratory Scientist'),
        ]);
        Rank::create([
            'name' => 'Chief Medical Laboratory Scientist',
            'nextrank' => 'Chief Medical Laboratory Scientist',
            'slug' => Str::slug('Chief Medical Laboratory Scientist'),
        ]);
        Rank::create([
            'name' => 'Environmental Health Assistant',
            'nextrank' => 'Higher Environmental Health Assistant',
            'slug' => Str::slug('Environmental Health Assistant'),
        ]);
        Rank::create([
            'name' => 'Higher Environmental Health Assistant',
            'nextrank' => 'Senior Environmental Health Assistant',
            'slug' => Str::slug('Higher Environmental Health Assistant'),
        ]);
        Rank::create([
            'name' => 'Senior Environmental Health Assistant',
            'nextrank' => 'Principal Environmental Health Assistant',
            'slug' => Str::slug('Senior Environmental Health Assistant'),
        ]);
        Rank::create([
            'name' => 'Principal Environmental Health Assistant',
            'nextrank' => 'Chief Environmental Health Assistant',
            'slug' => Str::slug('Principal Environmental Health Assistant'),
        ]);
        Rank::create([
            'name' =>  'Chief Environmental Health Assistant',
            'nextrank' => 'Chief Environmental Health Assistant',
            'slug' => Str::slug('Chief Environmental Health Assistant'),
        ]);
        Rank::create([
            'name' => 'Health Records Assistant',
            'nextrank' => 'Higher Health Records Assistant',
            'slug' => Str::slug('Health Records Assistant'),
        ]);
        Rank::create([
            'name' =>  'Higher Health Records Assistant',
            'nextrank' => 'Senior Health Records Assistant',
            'slug' => Str::slug('Higher Health Records Assistant'),
        ]);
        Rank::create([
            'name' => 'Senior Health Records Assistant',
            'nextrank' => 'Principal Health Records Assistant',
            'slug' => Str::slug('Senior Health Records Assistant'),
        ]);
        Rank::create([
            'name' => 'Principal Health Records Assistant',
            'nextrank' => 'Chief Health Records Assistant',
            'slug' => Str::slug('Principal Health Records Assistant'),
        ]);
        Rank::create([
            'name' =>  'Chief Health Records Assistant',
            'nextrank' => 'Chief Health Records Assistant',
            'slug' => Str::slug('Chief Health Records Assistant'),
        ]);
        Rank::create([
            'name' =>  'Nursing Officer II',
            'nextrank' => 'Nursing Officer I',
            'slug' => Str::slug('Nursing Officer II'),
        ]);
        Rank::create([
            'name' => 'Nursing Officer I',
            'nextrank' => 'Senior Nursing Officer',
            'slug' => Str::slug('Nursing Officer I'),
        ]);
        Rank::create([
            'name' => 'Senior Nursing Officer',
            'nextrank' => 'Principal Nursing Officer',
            'slug' => Str::slug('Senior Nursing Officer'),
        ]);
        Rank::create([
            'name' => 'Principal Nursing Officer',
            'nextrank' => 'Assistant Chief Nursing Officer',
            'slug' => Str::slug('Principal Nursing Officer'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Nursing Officer',
            'nextrank' => 'Chief Nursing Officer',
            'slug' => Str::slug('Assistant Chief Nursing Officer'),
        ]);
        Rank::create([
            'name' => 'Chief Nursing Officer',
            'nextrank' => 'Chief Nursing Officer',
            'slug' => Str::slug('Chief Nursing Officer'),
        ]);
        Rank::create([
            'name' => 'Staff Nurse/Staff Midwife II',
            'nextrank' => 'Staff Nurse/Staff Midwife I',
            'slug' => Str::slug('Staff Nurse/Staff Midwife II'),
        ]);
        Rank::create([
            'name' => 'Staff Nurse/Staff Midwife I',
            'nextrank' => 'Senior Staff Nurse/Staff Midwife',
            'slug' => Str::slug('Staff Nurse/Staff Midwife I'),
        ]);
        Rank::create([
            'name' => 'Senior Staff Nurse/Staff Midwife',
            'nextrank' => 'Principal Nurse II/Principal Midwife II',
            'slug' => Str::slug('Senior Staff Nurse/Staff Midwife'),
        ]);
        Rank::create([
            'name' => 'Principal Nurse II/Principal Midwife II',
            'nextrank' => 'Principal Nurse I/Principal Midwife I',
            'slug' => Str::slug('Principal Nurse II/Principal Midwife II'),
        ]);
        Rank::create([
            'name' => 'Principal Nurse I/Principal Midwife I',
            'nextrank' => 'Assistant Chief Nurse/Assistant Chief Midwife',
            'slug' => Str::slug('Principal Nurse I/Principal Midwife I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Nurse/Assistant Chief Midwife',
            'nextrank' => 'Chief Nurse/Chief Midwife',
            'slug' => Str::slug('Assistant Chief Nurse/Assistant Chief Midwife'),
        ]);
        Rank::create([
            'name' => 'Chief Nurse/Chief Midwife',
            'nextrank' => 'Chief Nurse/Chief Midwife',
            'slug' => Str::slug('Chief Nurse/Chief Midwife'),
        ]);
        Rank::create([
            'name' => 'Pharmacist',
            'nextrank' => 'Senior Pharmacist',
            'slug' => Str::slug('Pharmacist'),
        ]);
        Rank::create([
            'name' => 'Senior Pharmacist',
            'nextrank' => 'Principal Pharmacist II',
            'slug' => Str::slug('Senior Pharmacist'),
        ]);
        Rank::create([
            'name' => 'Principal Pharmacist II',
            'nextrank' => 'Principal Pharmacist I',
            'slug' => Str::slug('Principal Pharmacist II'),
        ]);
        Rank::create([
            'name' => 'Principal Pharmacist I',
            'nextrank' => 'Assistant Chief Pharmacist',
            'slug' => Str::slug('Principal Pharmacist I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Pharmacist',
            'nextrank' => 'Chief Pharmacist',
            'slug' => Str::slug('Assistant Chief Pharmacist'),
        ]);
        Rank::create([
            'name' => 'Chief Pharmacist',
            'nextrank' => 'Chief Pharmacist',
            'slug' => Str::slug('Chief Pharmacist'),
        ]);
        Rank::create([
            'name' => 'Medical Officer I',
            'nextrank' => 'Senior Medical Officer',
            'slug' => Str::slug('Medical Officer I'),
        ]);
        Rank::create([
            'name' => 'Senior Medical Officer',
            'nextrank' => 'Principal Medical Officer',
            'slug' => Str::slug('Senior Medical Officer'),
        ]);
        Rank::create([
            'name' => 'Principal Medical Officer',
            'nextrank' => 'Assistant Chief Medical Officer',
            'slug' => Str::slug('Principal Medical Officer'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Medical Officer',
            'nextrank' => 'Chief Medical Officer',
            'slug' => Str::slug('Assistant Chief Medical Officer'),
        ]);
        Rank::create([
            'name' => 'Chief Medical Officer',
            'nextrank' => 'Chief Medical Officer',
            'slug' => Str::slug('Chief Medical Officer'),
        ]);
        Rank::create([
            'name' => 'Director of Medical Services',
            'nextrank' => 'Director of Medical Services',
            'slug' => Str::slug('Director of Medical Services'),
        ]);
        Rank::create([
            'name' => 'Assistant Library Officer',
            'nextrank' => 'Library Officer',
            'slug' => Str::slug('Assistant Library Officer'),
        ]);
        Rank::create([
            'name' => 'Library Officer',
            'nextrank' => 'Higher Library Officer',
            'slug' => Str::slug('Library Officer'),
        ]);
        Rank::create([
            'name' => 'Higher Library Officer',
            'nextrank' => 'Senior Library Officer',
            'slug' => Str::slug('Higher Library Officer'),
        ]);
        Rank::create([
            'name' => 'Senior Library Officer',
            'nextrank' => 'Principal Library Officer II',
            'slug' => Str::slug('Senior Library Officer'),
        ]);
        Rank::create([
            'name' => 'Principal Library Officer II',
            'nextrank' => 'Principal Library Officer I',
            'slug' => Str::slug('Principal Library Officer II'),
        ]);
        Rank::create([
            'name' => 'Principal Library Officer I',
            'nextrank' => 'Assistant Chief Library Officer',
            'slug' => Str::slug('Principal Library Officer I'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Library Officer',
            'nextrank' => 'Chief Library Officer',
            'slug' => Str::slug('Assistant Chief Library Officer'),
        ]);
        Rank::create([
            'name' => 'Chief Library Officer',
            'nextrank' => 'Chief Library Officer',
            'slug' => Str::slug('Chief Library Officer'),
        ]);
        Rank::create([
            'name' => 'Accountant II/Auditor II',
            'nextrank' => 'Accountant I/Auditor I',
            'slug' => Str::slug('Accountant II/Auditor II'),
        ]);
        Rank::create([
            'name' => 'Accountant I/Auditor I',
            'nextrank' => 'Senior Accountant/Senior Auditor',
            'slug' => Str::slug('Accountant I/Auditor I'),
        ]);
        Rank::create([
            'name' => 'Senior Accountant/Senior Auditor',
            'nextrank' => 'Principal Accountant/Principal Auditor',
            'slug' => Str::slug('Senior Accountant/Senior Auditor'),
        ]);
        Rank::create([
            'name' => 'Principal Accountant/Principal Auditor',
            'nextrank' => 'Assistant Chief Accountant/Assistant Chief Auditor',
            'slug' => Str::slug('Principal Accountant/Principal Auditor'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Accountant/Assistant Chief Auditor',
            'nextrank' => 'Chief Accountant/Chief Auditor',
            'slug' => Str::slug('Assistant Chief Accountant/Assistant Chief Auditor'),
        ]);
        Rank::create([
            'name' => 'Chief Accountant/Chief Auditor',
            'nextrank' => 'Chief Accountant/Chief Auditor',
            'slug' => Str::slug('Chief Accountant/Chief Auditor'),
        ]);
        Rank::create([
            'name' => 'Director (Special Duties)',
            'nextrank' => 'Director (Special Duties)',
            'slug' => Str::slug('Director (Special Duties)'),
        ]);
        Rank::create([
            'name' => 'Bursar',
            'nextrank' => 'Bursar',
            'slug' => Str::slug('Bursar'),
        ]);
        Rank::create([
            'name' => 'Engineer II',
            'nextrank' => 'Engineer I',
            'slug' => Str::slug('Engineer II'),
        ]);
        Rank::create([
            'name' => 'Engineer I',
            'nextrank' => 'Senior Engineer',
            'slug' => Str::slug('Engineer I'),
        ]);
        Rank::create([
            'name' =>  'Senior Engineer',
            'nextrank' => 'Principal Engineer',
            'slug' => Str::slug('Senior Engineer'),
        ]);
        Rank::create([
            'name' => 'Principal Engineer',
            'nextrank' => 'Assistant Chief Engineer',
            'slug' => Str::slug('Principal Engineer'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Engineer',
            'nextrank' => 'Chief Engineer',
            'slug' => Str::slug('Assistant Chief Engineer'),
        ]);
        Rank::create([
            'name' => 'Chief Engineer',
            'nextrank' => 'Chief Engineer',
            'slug' => Str::slug('Chief Engineer'),
        ]);
        Rank::create([
            'name' => 'Director (Works & Engineering Services)',
            'nextrank' => 'Director (Works & Engineering Services)',
            'slug' => Str::slug('Director (Works & Engineering Services)'),
        ]);
        Rank::create([
            'name' => 'Quantity Surveyor II',
            'nextrank' => 'Quantity Surveyor I',
            'slug' => Str::slug('Quantity Surveyor II'),
        ]);
        Rank::create([
            'name' => 'Quantity Surveyor I',
            'nextrank' => 'Senior Quantity Surveyor',
            'slug' => Str::slug('Quantity Surveyor I'),
        ]);
        Rank::create([
            'name' =>  'Senior Quantity Surveyor',
            'nextrank' => 'Principal Quantity Surveyor',
            'slug' => Str::slug('Senior Quantity Surveyor'),
        ]);
        Rank::create([
            'name' =>  'Principal Quantity Surveyor',
            'nextrank' => 'Assistant Chief Quantity Surveyor',
            'slug' => Str::slug('Principal Quantity Surveyor'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Quantity Surveyor',
            'nextrank' => 'Chief Quantity Surveyor',
            'slug' => Str::slug('Assistant Chief Quantity Surveyor'),
        ]);
        Rank::create([
            'name' => 'Chief Quantity Surveyor',
            'nextrank' => 'Chief Quantity Surveyor',
            'slug' => Str::slug('Chief Quantity Surveyor'),
        ]);
        Rank::create([
            'name' => 'Director of Physical Planning',
            'nextrank' => 'Director of Physical Planning',
            'slug' => Str::slug('Director of Physical Planning'),
        ]);
        Rank::create([
            'name' => 'Architect II',
            'nextrank' => 'Architect I',
            'slug' => Str::slug('Architect II'),
        ]);
        Rank::create([
            'name' =>  'Architect I',
            'nextrank' => 'Senior Architect',
            'slug' => Str::slug('Architect I'),
        ]);
        Rank::create([
            'name' =>  'Senior Architect',
            'nextrank' => 'Principal Architect',
            'slug' => Str::slug('Senior Architect'),
        ]);
        Rank::create([
            'name' =>  'Principal Architect',
            'nextrank' => 'Assistant Chief Architect',
            'slug' => Str::slug('Principal Architect'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Architect',
            'nextrank' => 'Chief Architect',
            'slug' => Str::slug('Assistant Chief Architect'),
        ]);
        Rank::create([
            'name' =>  'Chief Architect',
            'nextrank' => 'Chief Architect',
            'slug' => Str::slug('Chief Architect'),
        ]);
        Rank::create([
            'name' =>  'Builder II',
            'nextrank' => 'Builder I',
            'slug' => Str::slug('Builder II'),
        ]);
        Rank::create([
            'name' => 'Builder I',
            'nextrank' => 'Senior Builder',
            'slug' => Str::slug('Builder I'),
        ]);
        Rank::create([
            'name' =>  'Senior Builder',
            'nextrank' => 'Principal Builder',
            'slug' => Str::slug('Senior Builder'),
        ]);
        Rank::create([
            'name' => 'Principal Builder',
            'nextrank' => 'Assistant Chief Builder',
            'slug' => Str::slug('Principal Builder'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Builder',
            'nextrank' => 'Chief Builder',
            'slug' => Str::slug('Assistant Chief Builder'),
        ]);
        Rank::create([
            'name' =>  'Chief Builder',
            'nextrank' => 'Chief Builder',
            'slug' => Str::slug('Chief Builder'),
        ]);
        Rank::create([
            'name' => 'Town Planner II',
            'nextrank' => 'Town Planner I',
            'slug' => Str::slug('Town Planner II'),
        ]);
        Rank::create([
            'name' => 'Town Planner I',
            'nextrank' => 'Senior Town Planner',
            'slug' => Str::slug('Town Planner I'),
        ]);
        Rank::create([
            'name' => 'Senior Town Planner',
            'nextrank' => 'Principal Town Planner',
            'slug' => Str::slug('Senior Town Planner'),
        ]);
        Rank::create([
            'name' => 'Principal Town Planner',
            'nextrank' => 'Assistant Chief Town Planner',
            'slug' => Str::slug('Principal Town Planner'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Town Planner',
            'nextrank' => 'Chief Town Planner',
            'slug' => Str::slug('Assistant Chief Town Planner'),
        ]);
        Rank::create([
            'name' =>  'Chief Town Planner',
            'nextrank' => 'Chief Town Planner',
            'slug' => Str::slug('Chief Town Planner'),
        ]);
        Rank::create([
            'name' => 'Estate Surveyor II',
            'nextrank' => 'Estate Surveyor I',
            'slug' => Str::slug('Estate Surveyor II'),
        ]);
        Rank::create([
            'name' =>  'Estate Surveyor I',
            'nextrank' => 'Senior Estate Surveyor',
            'slug' => Str::slug('Estate Surveyor I'),
        ]);
        Rank::create([
            'name' => 'Senior Estate Surveyor',
            'nextrank' => 'Principal Estate Surveyor',
            'slug' => Str::slug('Senior Estate Surveyor'),
        ]);
        Rank::create([
            'name' => 'Principal Estate Surveyor',
            'nextrank' => 'Assistant Chief Estate Surveyor',
            'slug' => Str::slug('Principal Estate Surveyor'),
        ]);
        Rank::create([
            'name' => 'Assistant Chief Estate Surveyor',
            'nextrank' => 'Chief Estate Surveyor',
            'slug' => Str::slug('Assistant Chief Estate Surveyor'),
        ]);
        Rank::create([
            'name' => 'Chief Estate Surveyor',
            'nextrank' => 'Chief Estate Surveyor',
            'slug' => Str::slug('Chief Estate Surveyor'),
        ]);
        Rank::create([
            'name' => 'Chief Medical Laboratory Technician',
            'nextrank' => 'Chief Medical Laboratory Technician',
            'slug' => Str::slug('Chief Medical Laboratory Technician'),
        ]);
        Rank::create([
            'name' =>  'Assistant Chief Medical Laboratory Technician',
            'nextrank' => 'Chief Medical Laboratory Technician',
            'slug' => Str::slug('Assistant Chief Medical Laboratory Technician'),
        ]);
        Rank::create([
            'name' =>  'Higher Medical Laboratory Technician',
            'nextrank' => 'Assistant Chief Medical Laboratory Technician',
            'slug' => Str::slug('Higher Medical Laboratory Technician'),
        ]);
        Rank::create([
            'name' => 'Senior Medical Laboratory Technician',
            'nextrank' => 'Higher Medical Laboratory Technician',
            'slug' => Str::slug('Senior Medical Laboratory Technician'),
        ]);
        Rank::create([
            'name' => 'Medical Laboratory Technician',
            'nextrank' => 'Senior Medical Laboratory Technician',
            'slug' => Str::slug('Medical Laboratory Technician'),
        ]);
        Rank::create([
            'name' => 'Principal Laboratory Assistant',
            'nextrank' => 'Assistant Chief Laboratory Assistant',
            'slug' => Str::slug('Principal Laboratory Assistant'),
        ]);
        Rank::create([
            'name' => 'Assistant Clerical Officer',
            'nextrank' => 'Clerical Officer',
            'slug' => Str::slug('Assistant Clerical Officer'),
        ]);
        Rank::create([
            'name' => 'Senior Catering Officer',
            'nextrank' => 'Principal Catering Officer',
            'slug' => Str::slug('Senior Catering Officer'),
        ]);
        Rank::create([
            'name' => 'Catering Officer',
            'nextrank' => 'Senior Catering Officer',
            'slug' => Str::slug('Catering Officer'),
        ]);
        Rank::create([
            'name' =>  'Assistant Catering Officer',
            'nextrank' => 'Catering Officer',
            'slug' => Str::slug('Assistant Catering Officer'),
        ]);
        Rank::create([
            'name' => 'Catering Supervisor',
            'nextrank' => 'Senior Catering Supervisor',
            'slug' => Str::slug('Catering Supervisor'),
        ]);
        Rank::create([
            'name' => 'Chief Cook',
            'nextrank' => 'Chief Cook',
            'slug' => Str::slug('Chief Cook'),
        ]);
        Rank::create([
            'name' => 'Senior Portress',
            'nextrank' => 'Principal Portress',
            'slug' => Str::slug('Senior Portress'),
        ]);
        Rank::create([
            'name' => 'Library Assistant',
            'nextrank' => 'Senior Library Assistant',
            'slug' => Str::slug('Library Assistant'),
        ]);
        Rank::create([
            'name' => 'Senior Library Assistant',
            'nextrank' => 'Principal Library Assistant',
            'slug' => Str::slug('Senior Library Assistant'),
        ]);
        Rank::create([
            'name' =>  'Assistant Patrol Supervisor',
            'nextrank' => 'Patrol Supervisor',
            'slug' => Str::slug('Assistant Patrol Supervisor'),
        ]);
        Rank::create([
            'name' =>  'Steward',
            'nextrank' => 'Senior Steward',
            'slug' => Str::slug('Steward'),
        ]);
        Rank::create([
            'name' =>  'Assistant Laboratory Attendant',
            'nextrank' => 'Laboratory Attendant',
            'slug' => Str::slug('Assistant Laboratory Attendant'),
        ]);
        Rank::create([
            'name' =>  'Receptionist',
            'nextrank' => 'Senior Receptionist',
            'slug' => Str::slug('Receptionist'),
        ]);
        Rank::create([
            'name' =>  'Messenger/Cleaner',
            'nextrank' => 'Senior Messenger/Cleaner',
            'slug' => Str::slug('Messenger/Cleaner'),
        ]);
        Rank::create([
            'name' => 'Works Superintendent',
            'nextrank' => 'Higher Works Superintendent',
            'slug' => Str::slug('Works Superintendent'),
        ]);
        Rank::create([
            'name' => 'Higher Works Superintendent',
            'nextrank' => 'Senior Works Superintendent',
            'slug' => Str::slug('Higher Works Superintendent'),
        ]);
        Rank::create([
            'name' => 'Senior Works Superintendent',
            'nextrank' => 'Senior Technical Officer',
            'slug' => Str::slug('Senior Works Superintendent'),
        ]);
        Rank::create([
            'name' => 'Chief Purchasing Officer',
            'nextrank' => 'Chief Purchasing Officer',
            'slug' => Str::slug('Chief Purchasing Officer'),
        ]);
    }
}
