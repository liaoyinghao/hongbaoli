<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>北京红宝力农业科技有限公司</title>
		<link rel="stylesheet" href="/Public/Home/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/Home/css/top.css" />
		<link rel="stylesheet" href="/Public/Home/css/style.css" />
		<script type="text/javascript" src="/Public/Home/js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/Public/Home/js/style.js"></script>
	</head>
	<body>
		
		<!--头部-->
		<header class="header">
    <div class="row header-row">
        <div class="col-md-2 hr-d2" id="hr-d2"><img src="/Public/Home/img/logo.jpg"/></div>
        <div class="col-md-6 hr-d3">
            <span class="hr-d3-s1">北京红宝力农业科技有限公司</span>
            <br><span class="hr-d3-s2">beijinghongbaolinongyekeji</span>
            <p class="hr-d3-p">北京红宝力农业科技<br>有限公司</p>
        </div>
        <div class="col-md-3 hr-d4" id="hr-d4"><img src="/Public/Home/img/dianhua.png"/><span>010 - 89485878</span></div>
    </div>
</header>

<!--导航栏-->
<div class="navbar navbar-inverse navbar-dangers" style="border-radius: 0;">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse" id="button">
                <span class="sr-only">Togo</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-sm" href="<?php echo U('Index/index');?>" id="shouye">首页</a>
        </div>
        <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav" id="navbar-dangers">
                <li><a href="<?php echo U('Product/product');?>">产品中心</a></li>
                <li><a href="<?php echo U('About/about');?>">红宝力故事</a></li>
                <li><a href="<?php echo U('Journalism/journalism');?>">新闻资讯</a></li>
                <li><a href="<?php echo U('Map/map');?>">联系我们</a></li>
                <li><a href="#">电商入口</a></li>
            </ul>
        </div>
    </div>
</div>

		<!--轮播图-->
		<div id="banner">
  			<div id="banner_bg"></div>
				<div id="banner_info"></div>
			<ul>
		    	<li class="on">1</li>
		    	<li>2</li>
		    	<li>3</li>
			</ul>

			<div id="banner_list"> 
			  	<a href="#" target="_blank"><img src="/Public/Home/img/banner1.jpg" alt="banner图标题1"/></a> 
			    <a href="#" target="_blank"><img src="/Public/Home/img/banner2.jpg" alt="banner图标题2"/></a> 
			    <a href="#" target="_blank"><img src="/Public/Home/img/banner3.jpg" alt="banner图标题3"/></a> 
			</div>
			    <img src="/Public/Home/img/banner3.jpg" alt="jquery插件库3" style="opacity: 0;width: 100%;"/>

		</div>
		
		<!--公司介绍-->
		<div class="jieshao">
			<div class="jieshaod1 col-md-4"><img src="/Public/Home/img/logo_pc_taxw.png"/></div>
			<div class="jieshaod2 col-md-7">
				<div class="row jieshao-d21">
					<p>红朗姆是专业运动马粮研发和生产的领导者。红朗姆致力于马营养研究，参考英国、爱尔兰、美国、澳大利亚等国家的马营养研究成果，
					汲取世界多位著名练马师和马场主的饲料调配经验，结合中国饲喂传统和现况，长期为马术队、俱乐部、马主提供更为安全、均衡的运动马粮，
					帮助客户改善马的生理机能，提高马的运动能力。</p>  
					<p>红朗姆马粮在马营养研究和配方研发方面与肯塔基马研究中心
					（Kentucky Equine Research）紧密合作，共同组成产品研发团队，坚持研究和改进，不断开发更优的马粮产品。
					为客户提供奥运品质的马粮是红朗姆的承诺，“平衡、自然、健康、安全”是红朗姆的品牌理念。</p>
					<p>源于对马的热爱， 我们可以为您提供更多专业技术服务，包括营养咨询、饲喂管理咨询、马匹体检、兽医服务等等。
					红朗姆，在过去和未来，愿与您一路相伴，共同见证中国马业的腾飞，为您的爱马保驾护航！红朗姆，是您身边的马营养专家！</p>
				</div>
				<div class="row jieshao-d22"><a href="#">了解更多>></a></div>
			</div>
		</div>
		
		<!--新闻资讯-->
		<div class="xinwen row">
			<div class="xinwen-d1 col-md-6">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-9 xinwen-drrd">
						<p class="xinwen-drp1"><img src="/Public/Home/img/book_kgfu.png"/>新闻资讯</p>
						<a href="#"><p><span class="xinwen-drsp1">[新闻动态]</span>红朗姆助力2016鸟巢大师赛 <span class="xinwen-drsp2">2016-09-29</span></p></a>
						<a href="#"><p><span class="xinwen-drsp1">[新闻动态]</span>浪琴表北京国际马术大师赛 <span class="xinwen-drsp2">2016-07-22</span></p></a>
						<a href="#"><p><span class="xinwen-drsp1">[新闻动态]</span>“红朗姆杯”济南首届马术嘉年华 <span class="xinwen-drsp2">2016-07-22</span></p></a>
						<a href="#"><p><span class="xinwen-drsp1">[新闻动态]</span>红朗姆携手KER举办马营养讲座 <span class="xinwen-drsp2">2016-07-22</span></p></a>
						<a href="#"><p><span class="xinwen-drsp2">更多>></span></p></a>
					</div>
				</div>
			</div>
			<div class="xinwen-d2 col-md-6">
				<div class="row">
					<div class="col-md-10 xinwen-drrd">
						<p class="xinwen-drp1"><img src="/Public/Home/img/book_kgfu2.png"/>饲喂​知识</p>
						<a href="#"><p><span class="xinwen-drsp1">[体况评分]</span>如何给马做体况评分 <span class="xinwen-drsp2">2016-09-29</span></p></a>
						<a href="#"><p><span class="xinwen-drsp1">[营养]</span>马对蛋白的需求概述 <span class="xinwen-drsp2">2016-07-22</span></p></a>
						<a href="#"><p><span class="xinwen-drsp1">[营养]</span>西部竞技马的营养需求管理 <span class="xinwen-drsp2">2016-07-22</span></p></a>
						<a href="#"><p><span class="xinwen-drsp1">[营养]</span>雨季来临当心泥土热 <span class="xinwen-drsp2">2016-07-22</span></p></a>
						<a href="#"><p><span class="xinwen-drsp2">更多>></span></p></a>
					</div>
				</div>
			</div>
		</div>

		<!--产品中心导航条-->
		<div class="chanpind">
			<div class="col-md-2"></div>
			<div class="col-md-8 col-xs-8"> 产 品 中 心</div>
			<div class="col-md-2 col-xs-4"> <a href="#">更多产品>></a></div>
		</div>
		
		<!--产品中心-->
		<div class="chanpin row">
			<div class="chanpindiv">
				<div class="col-md-3 col-sm-6">
					<p><img src="/Public/Home/img/tuszen.jpg" /></p>
					<p>幼马马粮</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<p><img src="/Public/Home/img/tuszen.jpg" /></p>
					<p>幼马马粮</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<p><img src="/Public/Home/img/tuszen.jpg" /></p>
					<p>幼马马粮</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<p><img src="/Public/Home/img/tuszen.jpg" /></p>
					<p>幼马马粮</p>
				</div>
			</div>
		</div>
		
		<!--底部信息-->
		<div class="footer">
    <p>Copyright © 2012 www.redrunm.com.All rights reserved.    北京XXXX有限公司版权所有</p>
    <p>电邮：3288573093@qq.com　　电话：86-010-89485878　　传真：86-010-89485878　　地址：XX市顺义区仁和镇天地悦港城A幢806室</p>
    <p>京ICP备16011231号-1 </p>
</div>
	</body>
</html>