@extends('admin.layout.gong')
@section('title', '权限添加')
@section('content')

    <center><h1>权限添加</h1></center><hr/>
    <form action="{{url('/menu/store')}}" method="post" class="form-horizontal" role="form" id="abb">
        {{csrf_field()}}
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">权限名称</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname" name="menu_name"
                       placeholder="请输入权限名称"><span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">权限路由</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname" name="menu_url"
                       placeholder="请输入权限路由"><span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">路由别名</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname" name="routename"
                       placeholder="请输入路由别名"><span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>
@endsection
