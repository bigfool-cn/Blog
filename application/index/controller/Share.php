<?php 
namespace app\index\controller;
use app\index\controller\LoginVerfy;

class Share extends LoginVerfy
{
	public function list()
	{
		$shares = model("Share")->with("Tag")->order('id','desc')->paginate(20);
		$pages = $shares->lastPage();
		$current_page = $shares->currentPage();
		$this->assign('shares',$shares);
		$this->assign('pages',$pages);
		$this->assign('current_page',$current_page);
		return $this->fetch();
	}
	public function add()
	{
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$title = request()->post("title","");
			$tag_id = request()->post("tag",0);
			$url = request()->post("url","");
			$desc = request()->post("desc","");
			$image = request()->file("image");
			$info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/faces');
			$image_path = "/uploads/faces/".$info->getSaveName();
			// var_dump($image_path);
			// exit();
			//查询分享是否存在
			$count = model("Share")->where("url",$url)->whereOr("title",$title)->count();
			// var_dump($count);
			// exit();
			if($count > 0)
			{
				$this->assign("status","添加失败,分享已存在");
				
			}
			else
			{
				$share = model("Share")->save([
					"title"=>$title,
					"tag_id"=>(int)$tag_id,
					"url"=>$url,
					"desc"=>$desc,
					"image"=>$image_path
				]);
				if($share > 0)
				{
					model("OperateLog")->save([
						"username"=>session('username'),
						"action"=>"添加分享:".$title,
					]);
					$this->assign("status","添加成功");
				}
				else
				{
					$this->assign("status","添加失败");
				}
			}
			$tags = model("Tag")->where("category_id",2)->select();
			$this->assign("tags",$tags);
			return $this->fetch();
		}
		$tags = model("Tag")->where("category_id",2)->select();
		$this->assign("tags",$tags);
		$this->assign("status","");
		return $this->fetch();
	}
	public function edit()
	{
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$id = request()->post("id",0);
			$title = request()->post("title","");
			$tag_id = request()->post("tag",0);
			$url = request()->post("url","");
			$desc = request()->post("desc","");
			$image = request()->file("image");
			// var_dump($image);
			// exit();
			if($image)
			{
				$info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/faces');
				$image_path = "/uploads/faces/".$info->getSaveName();
				$update_share = model("Share")->save([
					"title"=>$title,
					"tag_id"=>(int)$tag_id,
					"url"=>$url,
					"desc"=>$desc,
					"image"=>$image_path
				],["id"=>(int)$id]);
			}
			else
			{
				$update_share = model("Share")->save([
					"title"=>$title,
					"tag_id"=>(int)$tag_id,
					"url"=>$url,
					"desc"=>$desc,
				],["id"=>(int)$id]);
			}	
			if($update_share>0)
			{
				model("OperateLog")->save([
					"username"=>session("username"),
					"action"=>"修改分享:".$title,
				]);
				$this->assign("status","修改成功");
			}
			else
			{
				$this->assign("status","数据未改变");
			}
			$tags = model("Tag")->where("category_id",2)->select();
			$share = model("Share")->where("id",(int)$id)->find();
			$this->assign("tags",$tags);
			$this->assign("share",$share);
			return $this->fetch();
		}
		$id = request()->get("id",0);
		$tags = model("Tag")->where("category_id",2)->select();
		$share = model("Share")->where("id",(int)$id)->find();
		// var_dump($share);
		// exit();
		$this->assign("status","");
		$this->assign("tags",$tags);
		$this->assign("share",$share);
		return $this->fetch();
	}
	public function delete()
	{
		$id = request()->post("id",0);
		$share = model("Share")->where("id",(int)$id)->find();
		$share->delete();
		model("OperateLog")->save([
			"username"=>session("username"),
			"action"=>"删除分享:".$share->title,
		]);
		return ["status"=>"ok","msg"=>"删除成功"];
	}
}

 ?>
