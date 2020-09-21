@extends('admin.layout.gong')
@section('title', '添加菜单')
@section('content')
    <span class="layui-breadcrumb">
  <a href="/">首页</a>
  <a href="/weight/list">添加菜单</a>
  <a><cite>添加菜单</cite></a>
</span>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <table class="table">
        <caption>添加菜单</caption>
        <thead>
        <tr>
            <th>菜单名称</th>
            <th><input type="checkbox" class="boxs" name="checkbox1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($menu as $k=>$v)
            <tr>
                <td id="{{$v->menu_name}}"><span class="oldname menu_name">{{str_repeat('|--',$v->level)}}{{$v->menu_name}}</span></td>
                <td><input type="checkbox" class="priv_{{$v->menu_id}}" parent_id="{{$v->parent_id}}" name="checkbox2"  value="{{$v->menu_id}}"></td>
            </tr>

        @endforeach
        <td> <a href="{{url('/role/menudo/'.$v->role_id)}}" id="{{$v->role_id}}" type="button" class="btn btn-dange">添加菜单权限</a></td>
        </tbody>
    </table>
    </body>
    </html>
    <script>
        //全选与反选
        $(document).on("click",'input[name="checkbox1"]',function(){
            // alert(111);
            var _this=$(this);
            if(_this.prop("checked")== true){
                $("input[name='checkbox2']").prop("checked",true);
            }else{
                $("input[name='checkbox2']").prop("checked",false);
            }
        })
        $(document).on('click',function (){

        })
    </script>
@endsection
