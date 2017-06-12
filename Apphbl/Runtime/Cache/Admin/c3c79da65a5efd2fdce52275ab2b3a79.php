<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
	<title>欢迎来到官网后台</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/Public/Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/Admin/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/Public/Admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/Public/Admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/Public/Admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/Public/Admin/assets/img/favicon.png">
	<link rel="stylesheet" href="/Public/Admin/assets/css/xwcp.css" />
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- 头部-结束 --> <nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href=""><img src="/Public/Admin/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/Public/Admin/assets/img/user.png" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-user"></i> <span>我的个人资料</span></a></li>
                        <li><a href="#"><i class="lnr lnr-envelope"></i> <span>消息</span></a></li>
                        <li><a href="#"><i class="lnr lnr-cog"></i> <span>设置</span></a></li>
                        <li><a href="#"><i class="lnr lnr-exit"></i> <span>注销</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> <!-- 头部-开始 -->
		<!-- 左边-开始 --> <div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav daolanleft">
                <li><a href="<?php echo U('Index/index');?>" class=""><i class="lnr lnr-home"></i> <span>首页</span></a></li>
                <li><a href="<?php echo U('Charts/charts');?>" class=""><i class="lnr lnr-chart-bars"></i> <span>访问数据</span></a></li>
                <li><a href="<?php echo U('Elements/elements');?>" class=""><i class="lnr lnr-code"></i> <span>新闻中心</span></a></li>
                <li><a href="<?php echo U('Tables/tables');?>" class=""><i class="lnr lnr-dice"></i> <span>产品中心</span></a></li>
                <li class="daolanleftli">
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>管理员管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse">
                        <ul class="nav">
                            <li><a href="<?php echo U('User/user');?>" class="">添加管理员</a></li>
                            <li><a href="<?php echo U('Usergl/usergl');?>" class="">管理管理员</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?php echo U('Typography/typography');?>" class=""><i class="lnr lnr-text-format"></i> <span>联系我们</span></a></li>
                <li><a href="<?php echo U('Panels/panels');?>" class=""><i class="lnr lnr-cog"></i> <span>设置</span></a></li>
            </ul>
        </nav>
    </div>
</div> <!-- 左边-结束 -->

		<!-- 内容-开始 -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">产品中心</h3>
					<div class="row">
						<div class="row" style="width: 95%;margin: 0 auto;">
							<!-- BUTTONS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">
										<input type="submit" value="批量删除" class="xw-input" />
										<a href="#" class="xw-a">添加产品 ></a>
									</h3>
								</div>
								
								
								
								<div class="panel-body row">
									<table class="xinwenbg" border="1px" style="margin: 0 auto;">
										<thead style="background: #f5fffd;">
											<tr>
												<td class="col-md-1"><input type="checkbox"/></td>
												<td class="col-md-3">产品名称</td>
												<td class="col-md-2">发布者</td>
												<td class="col-md-2">发布时间</td>
												<td class="col-md-2">购买量</td>
												<td class="col-md-1">修改</td>
												<td class="col-md-1">删除</td>
											</tr>
										</thead>
										<tbody>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术qeqasdqe国际马术大赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>超级马粮</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术师赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术师赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术师赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术师赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术师赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术师赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术大赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
												<tr><td><input type="checkbox"/></td><td>浪琴表北京国际马术师赛</td><td>pmo732796</td><td>2016-08-02</td><td>172</td><td><a href="#">修改</a></td><td><a href="#">删除</a></td></tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BUTTONS -->
							<div class="row xinwenfy">
								<a href="#"><<</a>
								<span>1</span>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">>></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 底部-开始 --> 
<div class="clearfix"></div>
<footer>
    <div class="container-fluid">
        <p class="copyright">&copy; 本项目 <a href="#" target="_blank">千樱信息科技有限公司 </a> 制作</p>
    </div>
</footer> <!-- 底部-结束 -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="/Public/Admin/assets/vendor/jquery/jquery.min.js"></script>
	<script src="/Public/Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/Public/Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/Public/Admin/assets/scripts/klorofil-common.js"></script>
	<script type="text/javascript">
		$(function () { $(".daolanleft>li").eq(3).find("a").addClass("active"); })
	</script>
</body>

</html>