<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['name' => 'Pemweb', 'default_color' => '#F59E0B'],         // Amber
            ['name' => 'Statistik', 'default_color' => '#3B82F6'],      // Blue
            ['name' => 'PPKn', 'default_color' => '#10B981'],           // Green
            ['name' => 'Bahasa Inggris', 'default_color' => '#6366F1'], // Indigo
            ['name' => 'Basis Data', 'default_color' => '#EF4444'],     // Red
        ];

        foreach ($courses as $course) {
            Course::firstOrCreate(['name' => $course['name']], $course);
        }
    }
}
