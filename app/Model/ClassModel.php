<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    //指定表面
    protected $table = 'class';
    protected $primaryKey = 'class_id';
    public $timestamps = false;
}
