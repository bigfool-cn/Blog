<?php 
namespace app\index\controller;
use app\index\controller\LoginVerfy;

class Tag extends LoginVerfy
{
	public function list()
	{
		$tags = model("Tag")->with("Category")->paginate(20);
		$pages = $tags->lastPage();
		$current_page = $tags->currentPage();
		$this->assign('tags',$tags);
		$this->assign('pages',$pages);
		$this->assign('current_page',$current_page);
		return $this->fetch();
	}
	public function add()
	{
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$category = request()->post("category",0);
			$name = request()->post("name","");
			// var_dump($category,$name);
			// exit();
			//查询标签是否存在
			$count = model("Tag")->where("name",$name)->where("category_id",(int)$category)->count();
			// var_dump($count);
			// exit();
			if($count > 0)
			{
				$this->assign("status","添加失败,标签已存在");
				
			}
			else
			{
				$tag = model("Tag")->save(["name"=>$name,"category_id"=>(int)$category]);
				if ($tag > 0)
				{
					model("OperateLog")->save([
						"username"=>session('username'),
						"action"=>"添加标签:".$name,
					]);
					$this->assign("status","添加成功");
				}
				else
				{
					$this->assign("status","添加失败");
				}
			}
			$categorys = model("Category")->select();
			$this->assign("categorys",$categorys);
			return $this->fetch();
		}
		$categorys = model("Category")->select();
		$this->assign("categorys",$categorys);
		$this->assign("status","");
		return $this->fetch();
	}
	public function edit()
	{
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$id = request()->post("id",0);
			$category = request()->post("category",0);
			$name = request()->post("name","");
			// var_dump($id,$category,$name);
			// exit();
			//查询标签是否存在
			$count = model("Tag")->where("name",$name)->where("category_id",(int)$category)->count();
			if($count > 0)
			{
				$this->assign("status","修改失败，标签已存在");

			}
			else
			{		
				$update_tag = model("Tag")->save(["name"=>$name,"category_id"=>(int)$category],["id"=>(int)$id]);
				if($update_tag>0)
				{
					model("OperateLog")->save([
						"username"=>session('username'),
						"action"=>"修改标签：".$name,
					]);
					$this->assign("status","修改成功");
				}
				else
				{
					$this->assign("status","修改失败");
				}
			}
			$tag = model("Tag")->Where('id',(int)$id)->find();
			$categorys = model("Category")->select();
			$this->assign("categorys",$categorys);
			$this->assign('tag',$tag);
			return $this->fetch();
		}
		$id = request()->get("id",0);
		$tag = model("Tag")->Where('id',(int)$id)->find();
		// var_dump($tag,$id);
		// exit();
		$categorys = model("Category")->select();
		$this->assign("status","");
		$this->assign("categorys",$categorys);
		$this->assign('tag',$tag);
		return $this->fetch();
	}
	public function delete()
	{
		$id = request()->post("id",0);
		$tag = model("Tag")->where("id",(int)$id)->find();
		$tag->delete();
		model("OperateLog")->save([
			"username"=>session('username'),
			"action"=>"删除标签：".$tag->name,
		]);
		return ["status"=>"ok","msg"=>"删除成功"];
	}
}

 ?>
