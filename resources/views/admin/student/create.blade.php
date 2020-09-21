@extends('admin.layout.gong')
@section('title', '学生添加')
@section('content')

    <center><h1>学生添加</h1></center><hr/>
    <form action="{{url('/student/store')}}" method="get" class="form-horizontal" role="form" id="abb">
        {{csrf_field()}}
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">学生名称</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname" name="student_name"
                       placeholder="请输入学生名称"><span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">学生简介</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="firstname" name="student_desc"
                       placeholder="请输入学生简介"><span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>
@endsection
