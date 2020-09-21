@extends('admin.layout.gong')
@section('title', '管理员列表')
@section('content')

    <center><h1>管理员列表<a style="float:right" href="{{url('/admin/create')}}" type="button" class="btn btn-default">添加</a></h1></center><hr/>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>管理员ID</th>
                <th>管理员名称</th>
                <th>管理员手机号</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($admin as $v)
                <tr>
                    <td>{{$v->admin_id}}</td>
                    <td>{{$v->admin_name}}</td>
                    <th>{{$v->admin_plone}}</th>
                    <th><a href="{{url('/admin/edit/'.$v->admin_id)}}" id="{{$v->admin_id}}" type="button" class="btn btn-dange">编辑</a>
                        <a href="javascript:void(0);" id="{{$v->admin_id}}" type="button" class="btn btn-danger">删除</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
