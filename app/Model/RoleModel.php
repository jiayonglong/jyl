<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    //指定表面
    protected $table = 'role';
    protected $primaryKey = 'role_id';
    public $timestamps = false;
}
