<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>欢迎来到后台管理系统</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/Public/Admin/assets/css/bootstrap.min.css">
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
	<script type="text/javascript" src="/Public/Admin/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/login.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="/Public/Admin/assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">登录您的帐户</p>
							</div>
							<form class="form-auth-small" id="login" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="signinuser" value="" placeholder="User">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="signinpasswd" value="" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">登 录</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

</body>

</html>