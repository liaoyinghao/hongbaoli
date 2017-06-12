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
	<style>
		.pan-form{padding-left:50px;}
		.pan-form p{margin-top:20px;}
		.pan-form p input{width:70%;height: 30px;line-height: 30px;margin-left: 10px;border: none;border-bottom: 1px dashed #666;outline: none;}
		.pan-form p .submits{width: 150px;height: 32px;background: red;border-radius:5px;color: white;border: none;float: right;}
		
		.touxiang{width: 120px;height: 120px;border-radius: 50%;overflow: hidden;margin: 0 0 0 50px;}
		.touxiang>img{width: 120px;height: 120px;}
		.touxiang ,.touxiangxg{float: left;}
		.touxiangxg{width: 150px;height: 32px;background: red;border-radius:5px;color: white;border: none;float: right;text-align: center;line-height: 32px;margin-top: 90px;}
		.touxiangxg:hover{color: white;}
	</style>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($portrait); ?> <span><?php echo ($user); ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Index/index');?>"><i class="lnr lnr-user"></i> <span>首页</span></a></li>
                        <li><a href="<?php echo U('Panels/panels');?>"><i class="lnr lnr-cog"></i> <span>设置</span></a></li>
                        <li><a href="<?php echo U('Login/signout');?>" onclick="return confirm('确定要退出吗？');"><i class="lnr lnr-exit"></i> <span>注销</span></a></li>
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
                <li><a href="<?php echo U('Index/index');?>"><i class="lnr lnr-home"></i> <span>首页</span></a></li>
                <li><a href="<?php echo U('Charts/charts');?>"><i class="lnr lnr-chart-bars"></i> <span>访问数据</span></a></li>
                <li><a href="<?php echo U('Elements/elements');?>"><i class="lnr lnr-code"></i> <span>新闻中心</span></a></li>
                <li><a href="<?php echo U('Tables/tables');?>"><i class="lnr lnr-dice"></i> <span>产品中心</span></a></li>
                <li class="daolanleftli">
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>管理员管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse">
                        <ul class="nav">
                            <li><a href="<?php echo U('User/user');?>">添加管理员</a></li>
                            <li><a href="<?php echo U('Usergl/usergl');?>">管理管理员</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?php echo U('Typography/typography');?>"><i class="lnr lnr-text-format"></i> <span>联系我们</span></a></li>
                <li><a href="<?php echo U('Panels/panels');?>"><i class="lnr lnr-cog"></i> <span>设置</span></a></li>
            </ul>
        </nav>
    </div>
</div> <!-- 左边-结束 -->

		<!-- 内容-开始 -->
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">个人设置</h3>
					<div class="row">
						<div class="row" style="width: 95%;margin: 0 auto;">
							<!-- 框1 -->
							<div class="panel">							
								<div class="panel-body row">
									<div class="touxiang">										
										<img src="/Public/Admin/assets/img/wenhao.png"/>
									</div>
										<a href="#" class="touxiangxg">修改头像</a>
								</div>
							</div>
							<!-- 框2 -->
							<div class="panel">							
								<div class="panel-body row">
									<form action="#" method="post" class="pan-form">
										<p>登录账号：<input type="text" name=""/></p>
										<p>登录密码： <input type="text" name=""/></p>
										<p><input type="submit" value="保存修改" class="submits"/></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 内容-结束 -->

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
		$(function () { $(".daolanleft>li").eq(6).find("a").addClass("active"); })
	</script>
</body>

</html>