<?php /* Smarty version 2.6.25-dev, created on 2019-06-26 01:11:41
         compiled from /var/www/html/mobilehelper/view/admin/public/error.tpl */ ?>
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
		<?php $_from = $this->_tpl_vars['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
			<p><?php echo $this->_tpl_vars['value']; ?>
</p>
		<?php endforeach; endif; unset($_from); ?>
			<p><a href="<?php echo $this->_tpl_vars['prev']; ?>
">[返回]</a></p>
		</div>
    </body>
</html>