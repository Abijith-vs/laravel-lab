<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * php artisan db:seed  -> fills the students table with sample rows.
     * (Fictional names. Change them freely.)
     */
    public function run(): void
    {
        $rows = [
            ['CS23-01', 'Ananya Menon',   8.72],
            ['CS23-02', 'Rahul Krishnan', 7.95],
            ['CS23-03', 'Fathima Nasrin', 9.10],
            ['CS23-04', 'Arjun Das',      6.80],
            ['CS23-05', 'Meera Nair',     8.05],
            ['CS23-06', 'Joel Thomas',    7.40],
        ];

        foreach ($rows as [$roll, $name, $cgpa]) {
            Student::create([
                'roll_no'    => $roll,
                'name'       => $name,
                'email'      => strtolower(str_replace(' ', '.', $name)).'@example.com',
                'department' => 'CSE',
                'semester'   => 7,
                'cgpa'       => $cgpa,
            ]);
        }
    }
}
