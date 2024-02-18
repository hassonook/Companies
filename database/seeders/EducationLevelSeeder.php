<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education_level;
class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Education_level::truncate();

        $levels = [
            ['name' => 'NotEducated', 'name_ar' => 'غير متعلم'],
            ['name' => 'Elementary', 'name_ar' => 'إبتدائي'],
            ['name' => 'Secondary', 'name_ar' => 'ثانوي'],
            ['name' => 'University', 'name_ar' => 'جامعي'],
            ['name' => 'ِAbove University', 'name_ar' => 'فوق الجامعي'],
        ];
        foreach ($levels as $key => $value) {
            Education_level::create($value);
        }

    }
}
