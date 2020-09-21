@extends('admin.layout.gong')
@section('title', '角色列表')
@section('content')

    <center><h1>角色列表<a style="float:right" href="{{url('/role/create')}}" type="button" class="btn btn-default">添加</a></h1></center><hr/>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>角色ID</th>
                <th>角色名称</th>
                <th>角色简介</th>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($role as $v)
                <tr>
                    <td>{{$v->role_id}}</td>
                    <td>{{$v->role_name}}</td>
                    <td>{{$v->role_desc}}</td>
                    <td> <a href="{{url('/role/menu/'.$v->role_id)}}" id="{{$v->role_id}}" type="button" class="btn btn-dange">添加菜单</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
