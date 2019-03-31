<?php

namespace app\index\controller;

use app\index\controller\LoginVerfy;
use think\Loader;

class Location extends LoginVerfy
{
    /**
     * 位置列表
     * @Author   JS_chen
     * @DateTime 2018-04-15
     * @return   [type]     [description]
     */
    function list() {
        $locations = model('Locations')->order('create_time','desc')->paginate(20);
        $pages = $locations->lastPage();
        $current_page = $locations->currentPage();
        $this->assign('pages', $pages);
        $this->assign('current_page', $current_page);
        $this->assign('locations', $locations);
        return $this->fetch();
    }
    /**
     * 添加位置
     * @Author   JS_chen
     * @DateTime 2018-04-15
     */
    public function add()
    {
        if (request()->isPost()) {
            //获取表单数据
            $data = request()->post();
            $validate = Loader::validate('Locations');
            //验证数据合法性
            if (!$validate->check($data)) {
                //验证不通过返回错误信息
                $this->error($validate->getError());
                exit;
            } else {
                //验证通过，保存数据
                model('Locations')->save([
                    'x' => $data['x'],
                    'y' => $data['y'],
                    'address' => $data['address'],
                ]);
                $this->success('添加成功');
            }
        }
        return $this->fetch();
    }
}
