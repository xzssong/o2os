<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserinsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //表单授权
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //校验规则
    public function rules()
    {
        return [
            //用户名做规则设置  输入数据不能为空 正则规则  唯一
            'username'=>'required|regex:/\w{4,12}/|unique:users',
            //email 规则 校验数据是否符合邮箱格式
            'email'=>'required|email',
            //密码
            'password'=>'required|regex:/\w{3,16}/',
            //重复密码                                校验两次密码是否一致
            'repassword'=>'required|regex:/\w{3,16}/|same:password',
            //电话
            'phone'=>'required|regex:/\d{11}/',
        ];
    }
    //自定义错误消息
    public function messages(){
        return[
            'username.required'=>'用户名不能为空',
            'username.regex'=>'用户名必须为4-12位任意的数字字母',
            'username.unique'=>'用户名重复',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱不符合要求',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须为3-16任意的数字字母下划线',
            'repassword.required'=>'重复密码不能为空',
            'repassword.regex'=>'重复密码必须为3-16任意的数字字母下划线',
            'repassword.same'=>'两次密码不一致',
            'phone.required'=>'电话不能为空',
            'phone.regex'=>'电话不符合要求'
        ];
    }
}
