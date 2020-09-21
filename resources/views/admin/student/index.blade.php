@extends('admin.layout.gong')
@section('title', '学生列表')
@section('content')

    <center><h1>学生列表<a style="float:right" href="{{url('/student/create')}}" type="button" class="btn btn-default">添加</a></h1></center><hr/>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>学生ID</th>
                <th>学生名称</th>
                <th>学生简介</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($student as $v)
                <tr>
                    <td>{{$v->student_id}}</td>
                    <td>{{$v->student_name}}</td>
                    <td>{{$v->student_desc}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
