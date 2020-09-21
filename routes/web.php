<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('checklogin')->group(function() {
//管理员
    Route::get('/admin/create', 'Admin\AdminController@create');
    Route::get('/admin/store', 'Admin\AdminController@store');
    Route::get('/admin/index', 'Admin\AdminController@index');
//学生
    Route::get('/student/create', 'Admin\StudentController@create');
    Route::get('/student/store', 'Admin\StudentController@store');
    Route::get('/student/index', 'Admin\StudentController@index');
//班级
    Route::get('/class/create', 'Admin\ClassController@create');
    Route::get('/class/store', 'Admin\ClassController@store');
    Route::get('/class/index', 'Admin\ClassController@index');
//权限
    Route::get('/menu/create', 'Admin\MenuController@create');
    Route::any('/menu/store', 'Admin\MenuController@store');
    Route::get('/menu/index', 'Admin\MenuController@index');
//角色
    Route::get('/role/create', 'Admin\RoleController@create');
    Route::get('/role/store', 'Admin\RoleController@store');
    Route::get('/role/index', 'Admin\RoleController@index');
    Route::get('/role/menu/{id}', 'Admin\RoleController@menu');
    Route::get('/role/menudo', 'Admin\RoleController@menudo');

//登录
    Route::view('/login', 'admin.login.login');
    Route::any('/admin/logindo', 'Admin\LoginController@logindo');
    Route::view('/reg', 'admin.reg');
    Route::any('/admin/Doreg', 'Admin\RegController@Doreg');
});
