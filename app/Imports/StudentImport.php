<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new Student([
            // 'student_code' => $row['student_code'],
            // 'student_perfix' => $row['student_perfix'],
            // 'student_fname' => $row['student_fname'],
            // 'student_lname' => $row['student_lname'],
            // 'section_id' => $row['section_id'],
        // ]);
    }
}
