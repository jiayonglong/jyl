
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="/layui/css/layui.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">后台布局</div>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">管理员模块</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/admin/create">添加管理员</a></dd>
                        <dd><a href="/admin/index">管理员列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">班级模块</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/class/create">添加班级</a></dd>
                        <dd><a href="/class/index">班级列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">权限模块</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/menu/create">添加权限</a></dd>
                        <dd><a href="/menu/index">权限列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">角色模块</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/role/create">添加角色</a></dd>
                        <dd><a href="/role/index">角色列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">学生管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/student/create">添加学生</a></dd>
                        <dd><a href="/student/index">学生列表</a></dd>
                    </dl>
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">@yield('content')</div>
    </div>
</div>
<script src="/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>
