<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<link href="view/admin/style/basic.css" rel="stylesheet" type="text/css">
<link href="view/admin/style/error.css" rel="stylesheet" type="text/css">
<title>移动护工管理系统后台</title>
</head>

    <body>
		<H2>错误 -- 提示页</H2>
		<div id="list" class="error">
		{foreach from=$message key=key item=value}
			<p>{$value}</p>
		{/foreach}
			<p><a href="{$prev}">[返回]</a></p>
		</div>
    </body>
</html>