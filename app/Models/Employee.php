<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    protected $fillable = ['name', 'department_id'];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'employee_department')->withPivot('date');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
