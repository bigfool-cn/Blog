<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"/var/www/html/Blog/public/../application/index/view/user_log/operatelog.html";i:1527902923;s:68:"/var/www/html/Blog/public/../application/index/view/common/base.html";i:1528290307;s:68:"/var/www/html/Blog/public/../application/index/view/common/page.html";i:1528292409;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>操作日志--JS_chen 博客后台系统</title>
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
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/uploads/phone.png" alt="User Image" width="50px" height="50px">
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
          
<h1><i class="fa fa-edit"></i> 管理员操作日志</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo url('index/index/admin'); ?>"><i class="fa fa-home fa-lg"></i></a></li>
          
    <li class="breadcrumb-item">日志管理</li>
    <li class="breadcrumb-item">管理员操作日志</li>

        </ul>
      </div>
      
    <div class="tile">
        <h3 class="tile-title">管理员操作日志</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>用户名</th>
              <th>操作内容</th>
              <th>操作时间</th>
            </tr>
          </thead>
          <tbody>
          	<?php if(is_array($operatelogs) || $operatelogs instanceof \think\Collection || $operatelogs instanceof \think\Paginator): $i = 0; $__LIST__ = $operatelogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$operatelog): $mod = ($i % 2 );++$i;?>
	            <tr>
	              <td><?php echo $operatelog['id']; ?></td>
	              <td><?php echo $operatelog['username']; ?></td>
	              <td><?php echo $operatelog['action']; ?></td>
	              <td><?php echo $operatelog['create_time']; ?></td>
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
    <?php endif; if($current_page>5): if(($current_page+6)>$pages): $__FOR_START_423461970__=$current_page-5;$__FOR_END_423461970__=$pages+1;for($page=$__FOR_START_423461970__;$page < $__FOR_END_423461970__;$page+=1){ if($page==$current_page): ?>
                    <li class="paginate_button page-item active">
                        <a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php else: ?>
                    <li class="paginate_button page-item ">
                        <a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php endif; } else: $__FOR_START_1384905351__=$current_page-5;$__FOR_END_1384905351__=$current_page+6;for($page=$__FOR_START_1384905351__;$page < $__FOR_END_1384905351__;$page+=1){ if($page==$current_page): ?>
                    <li class="paginate_button page-item active">
                        <a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php else: ?>
                    <li class="paginate_button page-item ">
                        <a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php endif; } endif; else: if($pages>11): $__FOR_START_1800560811__=1;$__FOR_END_1800560811__=11;for($page=$__FOR_START_1800560811__;$page < $__FOR_END_1800560811__;$page+=1){ if($page==$current_page): ?>
                    <li class="paginate_button page-item active">
                        <a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php else: ?>
                    <li class="paginate_button page-item ">
                        <a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php endif; } else: $__FOR_START_1088514826__=1;$__FOR_END_1088514826__=$pages;for($page=$__FOR_START_1088514826__;$page < $__FOR_END_1088514826__;$page+=1){ if($page==$current_page): ?>
                    <li class="paginate_button page-item active">
                        <a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php else: ?>
                    <li class="paginate_button page-item ">
                        <a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
                    </li>
                <?php endif; } endif; endif; if($current_page == $pages): ?>
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
		$("#m-2").addClass('is-expanded');
        $("#m-2-2").addClass('active');
    })
</script>>

</html>
