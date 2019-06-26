<?php /* Smarty version 2.6.25-dev, created on 2019-06-21 09:11:35
         compiled from default/admin.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<link href="view/default/style/basic.css" rel="stylesheet" type="text/css">
<link href="view/default/style/admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="view/default/js/iframe.js"></script>
<script type="text/javascript" src="view/default/js/channel.js"></script>
<title>移动护工管理系统后台</title>
</head>

    <body>
		<div id="header">
			<p>您好，霞霞 [管理员] [退出]</p>
			<ul>
				<li class="first"><a href="?p=admin&m=main" target="in">起始页</a></li>
				<li><a href="javascript:channel(0)">护工信息</a</li>
				<li><a href="javascript:channel(1)">报表统计</a</li>
			</ul>
		</div>
		<div id="sidebar">
			<dl style="display:block">
				<dt>操作</dt>
					<dd><a href="###">浏览</a></dd>
					<dd><a href="###">新增</a></dd>
					
			</dl>
			<dl style="display:none">
				<dt>统计</dt>
					<dd><a href="###">报表</a></dd>					
			</dl>			
		</div>		
		<div id="main">
			<iframe src="?p=admin&m=main" name="in" frameborder="0"></iframe>
		</div>		
    </body>
</html>