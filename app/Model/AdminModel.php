<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    //指定表面
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    public $timestamps = false;
}
