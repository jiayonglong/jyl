@extends('admin.layout.gong')
@section('title', '权限列表')
@section('content')

    <center><h1>权限列表<a style="float:right" href="{{url('/menu/create')}}" type="button" class="btn btn-default">添加</a></h1></center><hr/>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>权限ID</th>
                <th>权限名称</th>
                <th>权限路由</th>
                <th>路由别名</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($menu as $v)
                <tr>
                    <td>{{$v->menu_id}}</td>
                    <td>{{$v->menu_name}}</td>
                    <td>{{$v->menu_url}}</td>
                    <td>{{$v->routename}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
