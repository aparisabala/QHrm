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
    protected $fillable = [
        'name',
        //'serial'
    ];
    //vpx_attach
    public function depertment()
    {
        return $this->hasOne(LibDepartment::class,'id','lib_department_id');
    }

     public function designation()
    {
        return $this->hasOne(LibDepartment::class,'id','lib_designation_id');
    }
}
