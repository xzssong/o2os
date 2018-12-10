<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// class User extends Model
// {
//     //一个模型类对应一个数据表
//     //规定属性 模型关联的数据表
//     protected $table="users";
//     //该模型是否需要自动维护时间戳
//     public $timestamps = true;
//     //可以被批量赋值属性
//     protected $fillable=['username','password','email','status','token','phone'];

//     //修改器方法 对获取到的数据做处理
//     public function getStatusAttribute($value){
//     	//处理字段状态
//     	$status=[1=>'禁用',2=>'开启'];
//     	//返回处理后的数据
//     	return $status[$value];
//     }
//     //会员模型和详情模型关联
//     public function info(){
//     	//hasOne 一对一          会员模型详情类       两模型关联字段
//     	return $this->hasOne('App\Models\Userinfo','users_id');
//     }
//     //获取会员下所有收货地址
//     public function addresss(){
//     	//hasMany 一对多             会员收货地址模型类   关键字段
//     	return $this->hasMany('App\Models\Useraddress','user_id');
//     }
// }
