<?php /* Smarty version 2.6.25-dev, created on 2019-06-21 09:38:28
         compiled from default/index.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<link href="css/login.css" rel="stylesheet" type="text/css">
<title><?php echo $this->_tpl_vars['name']; ?>
</title>
</head>

    <body>
	<div class="main">
	<form action="controller/login.php" method="post">
		<table id="login">
			<tr>
				<td align="center"><H3>移动护工管理系统</H3></td>
			</tr>
			<tr>
				<td align="center" ><input type="text" placeholder="请输入账号" class="textbox"></td>
			</tr>
			<tr>
				<td align="center"><input type="password" placeholder="请输入密码" class="textbox"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="登录" class="button" name="send"></td>
			</tr>			
		</table>
		</form>
	</div>
    </body>
</html>