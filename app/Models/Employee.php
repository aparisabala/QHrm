<?php

namespace App\Models;

use App\Traits\BaseTrait;
use Illuminate\Database\Eloquent\Model;
//vpx_imports
//crudDone
class Employee extends Model
{
    use BaseTrait;
    protected $table = "employees";
    //vpx_attach
    public function depertment()
    {
        return $this->hasOne(LibDepartment::class,'id','lib_department_id');
    }

     public function designation()
    {
        return $this->hasOne(LibDesignation::class,'id','lib_designation_id');
    }

    public function education()
    {
        return $this->hasMany(EmployeeEducation::class,'employee_id','id');
    }

    public function leaves()
    {
        return $this->hasMany(EmployeeLeave::class,'employee_id','id');
    }

    public function salary()
    {
        return $this->hasOne(EmployeeSalary::class,'employee_id','id');
    }
}
