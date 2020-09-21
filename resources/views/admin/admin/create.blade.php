@extends('admin.layout.gong')
@section('title', '管理员添加')
@section('content')

    <center><h1>管理员添加</h1></center><hr/>
    <form action="{{url('/admin/store')}}" method="get" class="form-horizontal" role="form" id="abb">
        {{csrf_field()}}
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">管理员名称</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname" name="admin_name"
                       placeholder="请输入管理员名称"><span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" class="admin_pwd" id="admin_pwd" name="admin_pwd"
                       placeholder="密码"><span style="color: darkred;">
            </div><span class="span"></span>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">管理员手机号</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname" name="admin_plone"
                       placeholder="请输入管理员手机号"><span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">角色</label>
            <div class="col-sm-8">
                @foreach($role as $k=>$v)
                    <input type="checkbox" name="role[]" value="{{$v->role_id}}">{{$v->role_name}}
                @endforeach
                <span style="color: darkred;">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>
@endsection
