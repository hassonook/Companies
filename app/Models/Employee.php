<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function approval()
    {
        return $this->belongsTo(Approval::class, 'approval_id');
    }
    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }
    public function martial_status()
    {
        return $this->belongsTo(Martial_status::class, 'martial_status_id');
    }
    public function education_level()
    {
        return $this->belongsTo(Education_level::class, 'education_level_id');
    }
    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }
    public function job_title()
    {
        return $this->belongsTo(Job_title::class, 'job_title_id');
    }
    public function employee_status()
    {
        return $this->belongsTo(Employee_status::class, 'employee_status_id');
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function modifier()
    {
        return $this->belongsTo(User::class, 'modified_by');
    }
}
