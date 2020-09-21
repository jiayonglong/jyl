<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    //指定表面
    protected $table = 'student';
    protected $primaryKey = 'student_id';
    public $timestamps = false;
}
