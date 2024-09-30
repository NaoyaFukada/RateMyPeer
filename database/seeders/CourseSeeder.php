<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 10 Courses
        for ($i = 1; $i <= 10; $i++) {
            Course::create([
                'course_code' => "CSE100{$i}",
                'course_name' => "Course {$i}",
            ]);
        }
    }
}
