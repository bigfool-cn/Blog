<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
        'id' => '\d+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    //前台
    '/' => ['home/index/index', ['method' => 'get']],
    'about' => ['home/index/about', ['method' => 'get']],
    'life' => ['home/index/life', ['method' => 'get']],
    'learn' => ['home/index/learn', ['method' => 'get']],
    'download' => ['home/index/download', ['method' => 'get']],
    'saying' => ['home/index/saying', ['method' => 'get']],
    'article/details' => ['home/index/details', ['method' => 'get']],

    //后台
    'csj' => ['index/index/index', ['method' => 'get|post']],
    //用户
    '[user]' => [
        '/login' => ['index/user/login', ['method' => 'get|post']],
    ],
    //访问者信息列表
    'visitinfo' => ['index/index/list', ['method' => 'get']],
    //用户日志
    '[userlog]' => [
        '/loginlog' => ['index/UserLog/loginlog', ['method' => 'get|post']],
        '/operatelog' => ['index/UserLog/operatelog', ['method' => 'get|post']],
    ],
    //标签
    '[tag]' => [
        '/list' => ['index/tag/list', ['method' => 'get|post']],
        '/add' => ['index/tag/add', ['method' => 'get|post']],
        '/edit' => ['index/tag/edit', ['method' => 'get|post']],
        '/delete' => ['index/tag/delete', ['method' => 'get|post']],
    ],
    //文章相关
    '[article]' => [
        '/list' => ['index/article/list', ['method' => 'get|post']],
        '/add' => ['index/article/add', ['method' => 'get|post']],
        '/edit' => ['index/article/edit', ['method' => 'get|post']],
        '/delete' => ['index/article/delete', ['method' => 'get|post']],
    ],
    //下载相关
    '[share]' => [
        '/list' => ['index/share/list', ['method' => 'get|post']],
        '/add' => ['index/share/add', ['method' => 'get|post']],
        '/edit' => ['index/share/edit', ['method' => 'get|post']],
        '/delete' => ['index/share/delete', ['method' => 'get|post']],
    ],
    //日记相关
    '[lifes]' => [
        '/list' => ['index/life/list', ['method' => 'get|post']],
        '/add' => ['index/life/add', ['method' => 'get|post']],
        '/delete' => ['index/life/delete', ['method' => 'post']],
    ],
    //位置相关
    '[location]' => [
        '/list' => ['index/location/list', ['method' => 'get']],
        '/add' => ['index/location/add', ['method' => 'get|post']],
    ],
];
