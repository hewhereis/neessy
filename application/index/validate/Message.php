<?php
/**
 * Created by PhpStorm.
 * User: Neessy
 * Date: 2018/11/14
 * Time: 16:34
 */

namespace app\index\validate;


use think\Validate;

class Message extends Validate
{
    protected $rule = [
         'name'  =>  'require|max:20',
         'email' => 'require|max:30|email',
         'message' => 'require|max:250',
    ];

    protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过20个字符',
        'email.require' => '邮箱必须',
        'email.max' => '邮箱不能超过30个字符',
        'email.email' => '不是有效的邮箱号码',
        'message.require' => '消息不能为空',
        'message.max' => '消息不能超过250个字符',
    ];

}