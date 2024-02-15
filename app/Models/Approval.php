<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }
    public function job_title()
    {
        return $this->belongsTo(Job_title::class, 'job_title_id');
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
