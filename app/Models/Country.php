<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'country_code';

    public function employees()
    {
        return $this->hasMany(Employee::class, 'nationality_id', 'country_code' );
    }
    public function approvals()
    {
        return $this->hasMany(Approval::class, 'nationality_id', 'country_code' );
    }

}
