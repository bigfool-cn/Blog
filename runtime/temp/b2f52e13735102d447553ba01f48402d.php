<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/index\view\article\add.html";i:1525419492;s:82:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/index\view\common\base.html";i:1527667540;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>添加文章--JS_chen 博客后台系统</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/static/css/index/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">
    
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Blog后台</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo \think\Session::get('username'); ?></p>
          <p class="app-sidebar__user-designation">超级管理员</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo url('index/index/index'); ?>" id="m-1"><i class="app-menu__icon fa fa-bank"></i><span class="app-menu__label">首页</span></a></li>
        <li class="treeview" id="m-2"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">日志管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/userlog/loginlog'); ?>" id="m-2-1"><i class="icon fa fa-circle-o"></i> 登录日志</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/userlog/operatelog'); ?>" rel="noopener" id="m-2-2"><i class="icon fa fa-circle-o"></i> 操作日志</a></li>
          </ul>
        </li>
        <li class="treeview" id="m-3"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bookmark"></i><span class="app-menu__label">标签管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/tag/list'); ?>" id="m-3-1"><i class="icon fa fa-circle-o"></i> 标签列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/tag/add'); ?>" rel="noopener" id="m-3-2"><i class="icon fa fa-circle-o"></i> 添加标签</a></li>
          </ul>
        </li>
        <li class="treeview" id="m-4"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-map"></i><span class="app-menu__label">内容管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/article/list'); ?>" id="m-4-1"><i class="icon fa fa-circle-o"></i> 文章列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/article/add'); ?>" rel="noopener" id="m-4-2"><i class="icon fa fa-circle-o"></i> 添加文章</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/share/list'); ?>" id="m-4-3"><i class="icon fa fa-circle-o"></i> 分享列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/share/add'); ?>" rel="noopener" id="m-4-4"><i class="icon fa fa-circle-o"></i> 添加分享</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/life/list'); ?>" id="m-4-5"><i class="icon fa fa-circle-o"></i> 日记列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/life/add'); ?>" rel="noopener" id="m-4-6"><i class="icon fa fa-circle-o"></i> 添加日记</a></li>
          </ul>
        </li>
        <li class="treeview" id="m-5"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-map"></i><span class="app-menu__label">位置管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/location/list'); ?>" id="m-5-1"><i class="icon fa fa-circle-o"></i> 位置列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/location/add'); ?>" id="m-5-2"><i class="icon fa fa-circle-o"></i> 添加位置</a></li>
        </ul>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          
<h1><i class="fa fa-edit"></i> 添加文章</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo url('index/index/admin'); ?>"><i class="fa fa-home fa-lg"></i></a></li>
          
    <li class="breadcrumb-item">内容管理</li>
    <li class="breadcrumb-item">添加文章</li>

        </ul>
      </div>
      
	<?php if($status): if($status=='添加成功'): ?>
		<div class="alert alert-dismissible alert-info">
		<?php else: ?>
		<div class="alert alert-dismissible alert-warning">
		<?php endif; ?>
            <button class="close" type="button" data-dismiss="alert">×</button>
            <h4><?php echo $status; ?></h4>
        </div>
	<?php endif; ?>
	<form action="<?php echo url('index/article/add'); ?>" method="post" enctype="multipart/form-data" onsubmit="return validForm()">
		<div class="form-group">
			<label class="control-label">标题:</label>
			<input class="form-control" type="text" id="title" name="title">
		</div>
		<div class="form-group">
			<label class="control-label">作者:</label>
			<input class="form-control" type="text" id="author" name="author">
		</div>
		<div class="form-group">
			<label class="control-label">所属标签:</label>
			<select class="form-control" id="tag" name="tag">
				<option value='' selected disabled>--请选择--</option>
				<?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
					<option value='<?php echo $tag['id']; ?>'><?php echo $tag['name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>}
			</select>
		</div>
		<div class="form-group">
	        <label class="control-label">封面:</label>
	        <div class="col-lg-3" style="margin-left: -14px">
            	<img class="form-control" id="imageShow" name="pic" width="150" height="140" />
        	</div>
			<input type="file" class="form-control-file" name="image" id="image" onchange="imgPreview(this)" />
	    </div>
	    <div class="form-group">
	        <label class="control-label">简介:</label>
	        <textarea class="form-control" id="desc" name="desc" rows="3" style="resize: none"></textarea>
          字数剩余:<span id="word">140</span><span>/140</span>
	    </div>
	    <div class="form-group">
	        <label class="control-label">文章内容:</label>
	        <textarea type="text" id="EditorId" name="content"></textarea>
	    </div>
	  	<button class="btn btn-primary" type="submit">添加</button>
	</form>

    </main>
  </body>
<script src="/static/js/index/jquery.min.js"></script>
<script src="/static/js/index/popper.min.js"></script>
<script src="/static/js/index/bootstrap.min.js"></script>
<script src="/static/js/index/main.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$("#m-4").addClass('is-expanded');
        $("#m-4-2").addClass('active');
    })
</script>
<script type="text/javascript">
    function imgPreview(fileDom){
        //判断是否支持FileReader
        if (window.FileReader) {
            var reader = new FileReader();
        } else {
            alert("您的设备不支持图片预览功能，如需该功能请升级您的设备！");
        }

        //获取文件
        var file = fileDom.files[0];
        var ext=fileDom.value.substring(fileDom.value.lastIndexOf(".")+1).toLowerCase();
        // gif在IE浏览器暂时无法显示
        if(ext!='png'&&ext!='jpg'&&ext!='jpeg'){
			if (ext != '') {
				alert("图片的格式必须为png或者jpg或者jpeg格式！");
			}
			image_file = $("#image");
			image_file.after(image_file.clone().val(""));
			image_file.remove();
			return;
        }else{
			if(((fileDom.files[0].size).toFixed(2))>=(2*1024*1024)){
				alert("请上传小于2M的图片");
				image_file = $("#image");
				image_file.after(image_file.clone().val(""));
				image_file.remove();
			    return;
			}
        }
        //读取完成
        reader.onload = function(e) {
            //获取图片dom
            var img = document.getElementById("imageShow");
            //图片路径设置为读取的图片
            img.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
</script>
<script type="text/javascript" src="/ueditor/ueditor.config.js"></script>  
<script type="text/javascript" src="/ueditor/ueditor.all.js"></script>
<script type="text/javascript" charset="utf-8">
	//初始化编辑器
	window.UEDITOR_HOME_URL = "/ueditor/";//配置路径设定为UEditor所放的位置
	window.UEDITOR_CONFIG.initialFrameHeight=600;//编辑器的高度 
	window.onload=function(){
        var editor = new UE.ui.Editor({
            imageUrl : '',
            fileUrl : '',
            imagePath : '',
            filePath : '',
            imageManagerUrl:'', //图片在线管理的处理地址
            imageManagerPath:'__ROOT__/'
        });
        editor.render("EditorId");//此处的EditorId与<textarea name="content" id="EditorId">的id值对应 </textarea>
	}
</script>
<script>
  function validForm()
  {
    title = $.trim($("#title").val());
    author = $.trim($("#author").val());
    tag = $("#tag option:selected").val();
    image = $.trim($("#image").val());
    desc = $.trim($("#desc").val());
    content = $.trim(UE.getContent());
    if(title=="")
    {
      alert("标题不能为空");
      return false;
    }
    if(author=="")
    {
      alert("作者不能为空");
      return false;
    }
    if(tag=="")
    {
      alert("所属标签不能为空");
      return false; 
    }
    if(image=="")
    {
      alert("封面图不能为空");
      return false;
    }
    if(desc=="")
    {
      alert("简介不能为空");
      return false;
    }
    if(content=="")
    {
      alert("文章内容不能为空");
      return false;
    }
    
  }
</script> 

</html>