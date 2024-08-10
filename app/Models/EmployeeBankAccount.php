<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeBankAccount extends Model
{
    use HasFactory, SoftDeletes;
    // The table associated with the model.
    protected $table = 'emp_bank_accounts';

    // The attributes that are mass assignable.
    protected $fillable = [
        'employee_id',
        'bank_name',
        'bank_name_ar',
        'account_no',
        'account_name',
        'iban',
        'swift_code',
        'active',
        'remarks',
    ];
 /**
     * Get the employee that owns the bank account.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Get the user who created the bank account.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who last modified the bank account.
     */
    public function modifiedBy()
    {
        return $this->belongsTo(User::class, 'modified_by');
    }

    /**
     * Get the user who deleted the bank account.
     */
    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
