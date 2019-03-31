<?php
/**
 * Created by PhpStorm.
 * User: JS_chen
 * Date: 2018/5/30
 * Time: 15:55
 */

namespace app\index\controller;
use app\index\controller\LoginVerfy;
use think\Db;

class Life extends LoginVerfy
{
    /**
     * Notes:日记列表
     * User: 'JS_chen'
     * Date: 2018/5/30
     * Time: 16:06
     * @return mixed
     */
    public function list()
    {
        $lifes = Db::name('life')->order('id','desc')->paginate(20);
        $pages = $lifes->lastPage();
        $current_page = $lifes->currentPage();
        $this->assign('lifes',$lifes);
        $this->assign('pages',$pages);
        $this->assign('current_page',$current_page);
        return $this->fetch();
    }

    /**
     * Notes:添加图片
     * User: 'JS_chen'
     * Date: 2018/5/30
     * Time: 16:36
     * @return mixed|void
     */
    public function add()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $title = request()->post("title","");
            $image = request()->file("image");
            $info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/life');
            $image_path = "/uploads/life/".$info->getSaveName();
            $data = [
                'title'=>$title,
                'img_url'=>$image_path
            ];
            Db::name('life')->insert($data);
            model("OperateLog")->save([
                "username"=>session("username"),
                "action"=>"添加日志:".$title,
            ]);
            return $this->success('添加成功');
        }
        return $this->fetch();
    }

    /**
     * Notes:删除日记
     * User: 'JS_chen'
     * Date: 2018/5/30
     * Time: 16:36
     * @return array
     */
    public function delete()
    {
        $id = request()->post("id",0);
        $life = Db::name("life")->where("id",(int)$id)->find();
        #删除图片
        unlink(ROOT_PATH.'public'.$life['img_url']);
	Db::name("life")->where("id",(int)$id)->delete();
        model("OperateLog")->save([
            "username"=>session("username"),
            "action"=>"删除分享:".$life['title'],
        ]);
        return ["status"=>"ok","msg"=>"删除成功"];
    }
}
