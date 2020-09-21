<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view(admin.admin.login);
    }
    public function logindo(Request $request){
        $post = request()->except('_token');
//        dd($post);
        $adminuser = AdminModel::where('admin_name',$post['admin_name'])->first();
        if(!$adminuser){
            return redirect('/login')->with('msg','没有此用户');
        }
//         dd($adminuser);
        if (Hash::check($post['admin_pwd'], $adminuser->admin_pwd)) {
            return redirect('/login')->with('msg','用户或密码错误');
        }
        session(['adminuser'=>$adminuser]);
        return redirect('/student/index');
    }
}
