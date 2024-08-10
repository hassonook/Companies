<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_title extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'name_ar'];
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }
}
