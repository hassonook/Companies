<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee_status;
class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Employee_status::truncate();

        $statuses = [
            ['name' => 'Apply for Visa', 'name_ar' => 'تم طلب السمة'],
            ['name' => 'Visa Approved', 'name_ar' => 'تمت الموافقة على السمة'],
            ['name' => 'Visa Printed', 'name_ar' => 'تم طباعة السمة'],
            ['name' => 'CheckedIn', 'name_ar' => 'تم الوصول'],
            ['name' => 'Medical', 'name_ar' => 'تم عمل الفحص الطبي'],
            ['name' => 'Finger Print', 'name_ar' => 'تم عمل البصمة'],
            ['name' => 'Contract', 'name_ar' => 'تم عمل العقد'],
            ['name' => 'Apply for ID', 'name_ar' => 'تم طلب البطاقة'],
            ['name' => 'Process Completed', 'name_ar' => 'تم إكمال الإجراءات'],
            ['name' => 'Secondment', 'name_ar' => 'إعارة'],
            ['name' => 'Transferred', 'name_ar' => 'نقل كفالة'],
            ['name' => 'Outside Country', 'name_ar' => 'خارج البلاد'],
        ];
        foreach ($statuses as $key => $value) {
            Employee_status::create($value);
        }

    }
}
