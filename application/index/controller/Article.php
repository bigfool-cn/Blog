<?php 
namespace app\index\controller;
use app\index\controller\LoginVerfy;

class Article extends LoginVerfy
{
	public function list()
	{
		$articles = model("Article")->with("Tag")->order('id','desc')->paginate(20);
		$pages = $articles->lastPage();
		$current_page = $articles->currentPage();
		$this->assign('articles',$articles);
		$this->assign('pages',$pages);
		$this->assign('current_page',$current_page);
		return $this->fetch();
	}
	public function add()
	{
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$title = request()->post("title","");
			$author = request()->post("author","");
			$tag_id = request()->post("tag",0);
			$desc = request()->post("desc","");
			$content = request()->post("content","");
			$image = request()->file("image");
			$info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/article/faces');
	        $image_path = "/uploads/article/faces/".$info->getSaveName();
			// var_dump($category,$name);
			// exit();
			//查询文章是否存在
			$count = model("Article")->where("title",$title)->where("content",$content)->count();
			// var_dump($count);
			// exit();
			if($count > 0)
			{
				$this->assign("status","添加失败,文章已存在");
				
			}
			else
			{
				$category_id = model("Tag")->where("id",$tag_id)->value("category_id");
				$article = model("Article")->save([
					"title"=>$title,
					"image"=>$image_path,
					"author"=>$author,
					"category_id"=>(int)$category_id,
					"tag_id"=>(int)$tag_id,
					"desc"=>trim($desc),
					"content"=>$content,
				]);
				if($article > 0)
				{
					model("OperateLog")->save([
						"username"=>session('username'),
						"action"=>"添加文章:".$title,
					]);
					$this->assign("status","添加成功");
				}
				else
				{
					$this->assign("status","添加失败");
				}
			}
			$tags = model("Tag")->where("category_id","<>",2)->select();
			$this->assign("tags",$tags);
			return $this->fetch();
		}
		$tags = model("Tag")->where("category_id","<>",2)->select();
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
			$author = request()->post("author","");
			$tag_id = request()->post("tag",0);
			$desc = request()->post("desc","");
			$content = request()->post("content","");
			$image = request()->file("image");
			// var_dump($id,$category,$name);
			// exit();	
			if($image)
			{
				$info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/article/faces');
		        $image_path = "/uploads/article/faces/".$info->getSaveName();
		        $category_id = model("Tag")->where("id",$tag_id)->value("category_id");
				$update_article = model("Article")->save([
					"title"=>$title,
					"image"=>$image_path,
					"author"=>$author,
					"category_id"=>(int)$category_id,
					"tag_id"=>(int)$tag_id,
					"desc"=>trim($desc),
					"content"=>$content,
				],["id"=>(int)$id]);
			}
			else
			{
				$update_article = model("Article")->save([
					"title"=>$title,
					"author"=>$author,
					"tag_id"=>(int)$tag_id,
					"desc"=>trim($desc),
					"content"=>$content,
				],["id"=>(int)$id]);
			}
			if($update_article>0)
			{
				model("OperateLog")->save([
					"username"=>session("username"),
					"action"=>"修改文章:".$title,
				]);
				$this->assign("status","修改成功");
			}
			else
			{
				$this->assign("status","数据未改变");
			}
			$article = model("Article")->Where("id",(int)$id)->find();
			$tags = model("Tag")->select();
			$this->assign("tags",$tags);
			$this->assign("article",$article);
			return $this->fetch();
		}
		$id = request()->get("id",0);
		$article = model("Article")->Where("id",(int)$id)->find();
		//var_dump($article->content);
		//exit();
		$tags = model("Tag")->select();
		$this->assign("status","");
		$this->assign("tags",$tags);
		$this->assign("article",$article);
		return $this->fetch();
	}
	public function delete()
	{
		$id = request()->post("id",0);
		$article = model("Article")->where("id",(int)$id)->find();
		$article->delete();
		model("OperateLog")->save([
			"username"=>session("username"),
			"action"=>"删除文章:".$article->title,
		]);
		return ["status"=>"ok","msg"=>"删除成功"];
	}
}


 ?>
