<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Exam;
use App\Models\Assign;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Student::factory(10)->create();

        $dataAssigns = [

            [

                'assign_name' => 'Quis',
                'is_active' => rand(0, 1)
            ],
            [

                'assign_name' => 'Tugas',
                'is_active' => rand(0, 1)
            ],
            [

                'assign_name' => 'Absensi',
                'is_active' => rand(0, 1)
            ],
            [

                'assign_name' => 'Praktek',
                'is_active' => rand(0, 1)
            ],
            [

                'assign_name' => 'Uas',
                'is_active' => rand(0, 1)
            ],

        ];



        foreach ($dataAssigns as $dataAssign) {
            Assign::factory()->create($dataAssign);
        }



        $dataExams = [
            [
                'id_student' => '1',
                'assign_type' => 1,
                'score' => '100'
            ],
            [
                'id_student' => '2',
                'assign_type' => 2,
                'score' => '75'
            ],
            [
                'id_student' => '3',
                'assign_type' => '3',
                'score' => '40'
            ],
            [
                'id_student' => "4",
                'assign_type' => 1,
                'score' => '60'
            ],
            [
                'id_student' => "5",
                'assign_type' => 4,
                'score' => '100'
            ],
            [
                'id_student' => "6",
                'assign_type' => 5,
                'score' => '100'
            ],
            [
                'id_student' => "7",
                'assign_type' => 1,
                'score' => '100'
            ],
            [
                'id_student' => "8",
                'assign_type' => 1,
                'score' => '100'
            ],
            [
                'id_student' => "9",
                'assign_type' => 1,
                'score' => '100'
            ],
            [
                'id_student' => "10",
                'assign_type' => 1,
                'score' => '100'
            ]
        ];



        foreach ($dataExams as $dataExam) {
            Exam::factory()->create($dataExam);
        }
    }
}
