<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\MenuModel;
use Illuminate\Http\Request;
use App\Model\RoleModel;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = RoleModel::get();
        return view('admin.role.index',['role'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu=MenuModel::get();
        $menu=$this->level($menu);
        return view('admin.role.create',['menu'=>$menu]);
    }
    public function menu($id){
        $menu=MenuModel::get();
        $menu=$this->level($menu);
        return view('admin.role.menu',['menu'=>$menu]);
    }
    public function menudo(Request $request){
        $post = $request->except('_token');
        dd($post);
    }
    //无限极分类
    public static function level($data,$parent_id=0,$level=0){
        if(empty($data)){
            return;
        }
        static $array=[];
        foreach($data as $k=>$v){
            if($parent_id==$v->parent_id){
                $v->level=$level;
                $array[]=$v;
                self::level($data,$v->menu_id,$level+1);
            }
        }
        return $array;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->except('_token');
//        dd($post);
        $res = RoleModel::insert($post);
        if($res){
            return redirect('/role/index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
