<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/index\view\tag\list.html";i:1527750878;s:82:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/index\view\common\base.html";i:1527667540;s:82:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/index\view\common\page.html";i:1527749928;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>标签列表--JS_chen 博客后台系统</title>
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
          
<h1><i class="fa fa-edit"></i> 标签列表</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo url('index/index/admin'); ?>"><i class="fa fa-home fa-lg"></i></a></li>
          
    <li class="breadcrumb-item">标签管理</li>
    <li class="breadcrumb-item">标签列表</li>

        </ul>
      </div>
      
   <div class="tile">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>标签昵称</th>
              <th>所属模板</th>
              <th>添加时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          	<?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
	            <tr>
	              <td><?php echo $tag['id']; ?></td>
	              <td><?php echo $tag['name']; ?></td>
	              <td><?php echo $tag['category']['name']; ?></td>
	              <td><?php echo $tag['create_time']; ?></td>
	              <td><a href="<?php echo url('index/tag/edit'); ?>?id=<?php echo $tag['id']; ?>">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="<?php echo $tag['id']; ?>" onclick="toDelete(<?php echo $tag['id']; ?>)" style="color: red;cursor:pointer">删除</a></td>
	            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
	   <ul class="pagination">
    <?php if($current_page==1): ?>
        <li class="paginate_button page-item previous disabled">
            <a href="" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
    <?php else: ?>
        <li class="paginate_button page-item previous">
            <a href='?page=<?php echo $current_page-1; ?>' aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
    <?php endif; if($current_page>5): if(($current_page+6)>$pages): $__FOR_START_1548__=$current_page-5;$__FOR_END_1548__=$pages+1;for($page=$__FOR_START_1548__;$page < $__FOR_END_1548__;$page+=1){ if($page==$current_page): ?>
                    <li class="paginate_button page-item active">
                        <a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php else: ?>
                    <li class="paginate_button page-item ">
                        <a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php endif; } else: $__FOR_START_3849__=$current_page-5;$__FOR_END_3849__=$current_page+6;for($page=$__FOR_START_3849__;$page < $__FOR_END_3849__;$page+=1){ if($page==$current_page): ?>
                    <li class="paginate_button page-item active">
                        <a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php else: ?>
                    <li class="paginate_button page-item ">
                        <a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php endif; } endif; else: $__FOR_START_3348__=1;$__FOR_END_3348__=$pages+1;for($page=$__FOR_START_3348__;$page < $__FOR_END_3348__;$page+=1){ if($page==$current_page): ?>
                <li class="paginate_button page-item active">
                    <a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
                </li>
            <?php else: ?>
                <li class="paginate_button page-item ">
                    <a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
                </li>
            <?php endif; } endif; if($current_page == $pages): ?>
        <li class="paginate_button page-item next disabled">
            <a href="#" aria-controls="sampleTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    <?php else: ?>
        <li class="paginate_button page-item next">
            <a href='?page=<?php echo $current_page+1; ?>' aria-controls="sampleTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    <?php endif; ?>
</ul>
   </div>

    </main>
  </body>
<script src="/static/js/index/jquery.min.js"></script>
<script src="/static/js/index/popper.min.js"></script>
<script src="/static/js/index/bootstrap.min.js"></script>
<script src="/static/js/index/main.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
        $("#m-3").addClass('is-expanded');
        $("#m-3-1").addClass('active');
    })
</script>
<script>
	function toDelete(id){
		$.ajax({
			cache:false,
			type:"POST",
			url:"<?php echo url('index/tag/delete'); ?>",
			dataType:"json",
			data:{"id":id},
			async:true,
			success:function(data){
				alert(data.msg);
				$('#'+id).parents('tr').remove();
			}
		});
	}
</script>

</html>