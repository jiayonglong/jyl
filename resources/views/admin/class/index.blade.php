@extends('admin.layout.gong')
@section('title', '班级列表')
@section('content')

    <center><h1>班级列表<a style="float:right" href="{{url('/class/create')}}" type="button" class="btn btn-default">添加</a></h1></center><hr/>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>班级ID</th>
                <th>班级名称</th>
                <th>班级简介</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($class as $v)
                <tr>
                    <td>{{$v->class_id}}</td>
                    <td>{{$v->class_name}}</td>
                    <td>{{$v->class_desc}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
