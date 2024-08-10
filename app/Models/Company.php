<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }
    /**
     * Get the bank accounts for the company.
     */
    public function bankAccounts()
    {
        return $this->hasMany(CompanyBankAccount::class);
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
