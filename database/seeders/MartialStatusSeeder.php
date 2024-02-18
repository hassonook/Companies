<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Martial_status;
class MartialStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Martial_status::truncate();

        $statuses = [
            ['name' => 'Single', 'name_ar' => 'عازب'],
            ['name' => 'Married', 'name_ar' => 'متزوج'],
            ['name' => 'Divorced', 'name_ar' => 'مطلق'],
            ['name' => 'Widow', 'name_ar' => 'أرمل'],
        ];
        foreach ($statuses as $key => $value) {
            Martial_status::create($value);
        }

    }
}
