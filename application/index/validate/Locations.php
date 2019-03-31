<?php

namespace app\index\validate;

use think\Validate;

class Locations extends Validate
{
    protected $rule = [
        'x' => 'require|number',
        'y' => 'require|number',
        'address' => 'require',
    ];
    protected $message = [
        'x.require' => '经度不能为空',
        'x.number' => '经度只能为数字',
        'y.require' => '维度不能为空',
        'y.number' => '维度只能为数字',
        'address.require' => '结构地址不能为空',
    ];
}
