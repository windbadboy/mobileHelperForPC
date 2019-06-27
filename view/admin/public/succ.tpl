<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<link href="view/admin/style/basic.css" rel="stylesheet" type="text/css">
<link href="view/admin/style/succ.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="2;url={$url}" />
<title>移动护工管理系统后台</title>
</head>

    <body>
		<H2>成功 -- 提示页</H2>
		<div id="list" class="succ">
		{foreach from=$message key=key item=value}
			<p>{$value}</p>
		{/foreach}
			<p><a href="{$url}">[如果浏览器未及时跳转，请点击这里]</a></p>
		</div>
    </body>
</html>