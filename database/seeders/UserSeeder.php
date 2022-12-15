<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lecturer::create([
          'lecturer_username' => 'teeratin@gmail.com',
          'lecturer_password' => '123456',
          'lecturer_type' => '1',
          'lecturer_lname' => 'ภู่ระมาต',
          'lecturer_perfix' => 'นาย',
          'lecturer_fname' => 'ธีรทิน',
          'lecturer_image' => 'asda'
        ]);
    }
}
