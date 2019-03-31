<?php
namespace app\home\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        //IP地址查询
        $ip = request()->ip();
        $today = date("Y-m-d");
        $count = model("VisitInfo")->where("ip", $ip)->where("create_time", "like", "$today%")->count();
        // var_dump($count);
        // exit();
        if ($count == 0) {
            $url = "http://ip.taobao.com/service/getIpInfo.php?ip=" . (string) $ip;
            $html = file_get_contents($url);
            $data = json_decode($html);
            $address = $data->data->region . "-" . $data->data->city;
            $visitinfo = model("VisitInfo")->save([
                "ip" => $ip,
                "address" => $address,
            ]);
        }
        $lifes = Db::name("life")->order('add_time', 'desc')->limit(3)->select();
        $articles = model("Article")->order('create_time', 'desc')->limit(8)->select();
        $this->assign("lifes", $lifes);
        $this->assign("articles", $articles);
        return $this->fetch();
    }
    public function about()
    {
        //获取最新一条数据
        $location = model('Locations')->order('create_time','desc')->find();
        // dump($location->x);die;
        $this->assign('location', $location);
        return $this->fetch();
    }
    public function life()
    {
        $lifes = Db::name('life')->order("add_time", "desc")->paginate(9);
        $pages = $lifes->lastPage();
        $current_page = $lifes->currentPage();
        $this->assign('lifes', $lifes);
        $this->assign('pages', $pages);
        $this->assign('current_page', $current_page);
        return $this->fetch();
    }
    public function learn()
    {
        //获取用户点击的标签
        $tag = request()->get("tag", "");
        //获取关于所属学无止境模板的全部标签
        $tags = model("Tag")->where("category_id", 1)->select();
        if ($tag) {
            $tag_id = model("Tag")->where("name", $tag)->value("id");
            $articles = model("Article")->where("tag_id", $tag_id)->order('create_time', 'desc')->paginate(8);
        } else {
            $articles = model("Article")->order("create_time", "desc")->paginate(8);
        }
        $pages = $articles->lastPage();
        $current_page = $articles->currentPage();
        $this->assign('tags', $tags);
        $this->assign('current_tag', $tag);
        $this->assign('articles', $articles);
        $this->assign('pages', $pages);
        $this->assign('current_page', $current_page);
        return $this->fetch();
    }
    public function download()
    {
        $shares = model("Share")->order('id','desc')->paginate(9);
        $counts = model("Share")->count();
        $pages = $shares->lastPage();
        $current_page = $shares->currentPage();
        $this->assign('shares', $shares);
        $this->assign('counts', $counts);
        $this->assign('pages', $pages);
        $this->assign('current_page', $current_page);
        return $this->fetch();
    }
    public function details()
    {
        $id = request()->get("id", 0);
        $article = model("Article")->where("id", (int) $id)->find();
        //阅读量加1
        $article->click_nums += 1;
        $article->save();
        $category_id = $article->category_id;
        if ($category_id == 1) {
            $path = "learn";
        } else {
            $path = "life";
        }
        //相关文章
        $relate_articles = model("Article")->where("tag_id", $article->tag_id)->where("id", "<>", (int) $id)->limit(4)->select();
        //上一篇文章
        $pre_article = model("Article")->where("category_id", $category_id)->where("id", "<", (int) $id)->order('id','desc')->limit(1)->find();
        //下一篇
        $next_article = model("Article")->where("category_id", $category_id)->where("id", ">", (int) $id)->limit(1)->find();
        $this->assign("article", $article);
        $this->assign("path", $path);
        $this->assign("relate_articles", $relate_articles);
        $this->assign("pre_article", $pre_article);
        $this->assign("next_article", $next_article);
        return $this->fetch();
    }
    public function saying()
    {
        return $this->fetch();
    }
    public function getImage()
    {
        $username = request()->post('username','');
        if($username=='xxx')
        {
            $msg = ['/uploads/phone.png','/uploads/wechat.jpg','/uploads/qq.jpg'];
            return['status'=>200,'data'=>$msg];
        }else{
            return['status'=>400,'data'=>'名字有误'];
        }
    }

}
