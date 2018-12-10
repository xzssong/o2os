<?php
//路由
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

Route::resource("/admin","Admin\AdminController");
Route::resource("/","Home\HomeController");
// Route::resource("/adminusers","Admin\UsersController");
// //Ajax删除
// Route::get("/adminuserdel","Admin\usersController@del");
// Route::resource("/adminuser","Admin\UserController");
// Route::get("/adminaddress/{id}","Admin\UserController@address");

// //调试工具测试
// Route::get("/user","Admin\UserController@user");
// //调用自定义函数
// Route::get("/users","Admin\UserController@users");
// //自定义类访问
// Route::get("/c","Admin\UserController@c");
// //结合云之讯短信接口
// Route::get("/p","Admin\UserController@p");

// Route::get("/pay","Admin\UserController@pay");

// Route::get("/returnurl","Admin\UserController@returnurl");
