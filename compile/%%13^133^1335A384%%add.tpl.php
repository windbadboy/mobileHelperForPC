<?php /* Smarty version 2.6.25-dev, created on 2019-06-26 01:30:01
         compiled from admin/manage/add.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<link href="view/admin/style/basic.css" rel="stylesheet" type="text/css">
<link href="view/admin/style/manage.css" rel="stylesheet" type="text/css">
<title>移动护工管理系统后台</title>
</head>

    <body>
		<H2><a href="?p=manage">返回管理员列表</a>系统 -- 添加管理员</H2>
		<form action="?p=manage&m=add" method="post">
			<dl class="form">
				<dd>用户名称:<input type="text" name="user" class="text" /></dd>
				<dd>用户密码:<input type="password" name="pass" class="text" /></dd>
				<dd>确认密码:<input type="password" name="notpass" class="text" /></dd>
				<dd>管理员类型:
					<select name="level">
						<option value="1">超级管理员</option>
						<option value="2">后台管理员</option>
						<option value="3">订单管理员</option>
					</select></dd>
				<dd>用户状态:
					<select name="status">
						<option value="1">在用</option>
						<option value="0">未用</option>
					</select></dd>
				<dd><input type="submit" name="send" class="submit" value="添加" /></dd>
			</dl>
		
		</form>
    </body>
</html>