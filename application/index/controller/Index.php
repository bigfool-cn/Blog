<?php
namespace app\index\controller;
use app\index\controller\LoginVerfy;

class Index extends LoginVerfy
{
    public function index()
    {
        //访问者总人数
        $visit_counts = model("VisitInfo")->count();
        $today = date("Y-m-d");
        //今天访问人数
        $visit_today = model("VisitInfo")->where("create_time","like","$today%")->count();
        ///文章总数
        $article_counts = model("Article")->count();
        //分享下载总数
        $share_counts = model("Share")->count();
        //访问者信息
        $visit_infos = model("VisitInfo")->order("id","desc")->paginate(20);
    	$pages = $visit_infos->lastPage();
		$current_page = $visit_infos->currentPage();
        $this->assign("visit_counts",$visit_counts);
        $this->assign("visit_today",$visit_today);
        $this->assign("article_counts",$article_counts);
        $this->assign("share_counts",$share_counts);
    	$this->assign("visit_infos",$visit_infos);
		$this->assign('pages',$pages);
		$this->assign('current_page',$current_page);
        return $this->fetch();
    }
}
