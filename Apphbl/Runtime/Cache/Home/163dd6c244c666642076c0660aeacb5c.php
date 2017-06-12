<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>北京红宝力农业科技有限公司</title>
		<link rel="stylesheet" href="/Public/Home/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/Home/css/top.css" />
		<link rel="stylesheet" href="/Public/Home/css/map.css" />
		<script type="text/javascript" src="/Public/Home/js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=OXNV4vMzLxDWsKEuxUDjwnydIjxa0EQW"></script>
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
		
		<!--联系我们-->
		<div class="product">
			<div class="row cp-daohan">
				<img src="/Public/Home/img/goods_mekj.png"/> 联系我们
			</div>
			
			<div class="chanpin row">
				<p>联络地址：北京市顺义区仁和镇天地悦港城A幢806室</p>
				<p>电话：86-010-89485878</p>
				<p>传真：86-010-89485878</p>
				<p>兽医服务电话：010-89485878/18611588838</p>
				<p>电邮：3288573093@qq.com</p>
				<p>办公时间： 工作日9:00am - 6:00pm</p>
			</div>
			
			<div id="map"></div>
			<script type="text/javascript">
				    //创建和初始化地图函数：
				    function initMap(){
				      createMap();//创建地图
				      setMapEvent();//设置地图事件
				      addMapControl();//向地图添加控件
				      addMapOverlay();//向地图添加覆盖物
				    }
				    function createMap(){ 
				      map = new BMap.Map("map"); 
				      map.centerAndZoom(new BMap.Point(121.721636,31.398792),17);
				    }
				    function setMapEvent(){
				      map.enableScrollWheelZoom();
				      map.enableKeyboard();
				      map.enableDragging();
				      map.enableDoubleClickZoom()
				    }
				    function addClickHandler(target,window){
				      target.addEventListener("click",function(){
				        target.openInfoWindow(window);
				      });
				    }
				    function addMapOverlay(){
				      var markers = [
				        {content:"北京市顺义区仁和镇天地悦港城A幢806室",title:"北京红宝力农业科技有限公司",imageOffset: {width:0,height:-21},position:{lat:31.397944,lng:121.72072}},
				      ];
				      for(var index = 0; index < markers.length; index++ ){
				        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
				        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
				          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
				        })});
				        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
				        var opts = {
				          width: 200,
				          title: markers[index].title,
				          enableMessage: false
				        };
				        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
				        marker.setLabel(label);
				        addClickHandler(marker,infoWindow);
				        map.addOverlay(marker);
				      };
				      var labels = [
				      ];
				      for(var index = 0; index < labels.length; index++){
				        var opt = { position: new BMap.Point(labels[index].position.lng,labels[index].position.lat )};
				        var label = new BMap.Label(labels[index].content,opt);
				        map.addOverlay(label);
				      };
				    }
				    //向地图添加控件
				    function addMapControl(){
				      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
				      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
				      map.addControl(scaleControl);
				      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
				      map.addControl(navControl);
				      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:false});
				      map.addControl(overviewControl);
				    }
				    var map;
				      initMap();
				  </script>
		
			<div class="row erweima">
				<div class="col-md-6">
					<p>红朗姆微信公众号：redrunm</p>
					<p>打开手机，进入“微信”——“发现”——“扫一扫”</p>
					<p>扫描右侧二维码，快速关注红朗姆微信公众平台，获取马营养和兽医相关知识和信息。</p>
				</div>
				<div class="col-md-6">
					<img src="/Public/Home/img/erweima.jpg" class="erweimaimg" />
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