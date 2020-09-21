<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    //指定表面
    protected $table = 'menu';
    protected $primaryKey = 'menu_id';
    public $timestamps = false;
}
