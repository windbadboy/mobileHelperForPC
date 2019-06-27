<?php

error_reporting(E_ALL & ~E_STRICT & ~E_WARNING);
//定义一个实际路径
define('ROOT_PATH', substr(dirname(__FILE__),0,-8));

//设置编码
header('Content-Type:text/html;charset=utf-8');
//定义时区
date_default_timezone_set('Asia/Shanghai');
//加载自定义配置文件
require ROOT_PATH.'/configs/profile.inc.php';
//引入Smarty
require ROOT_PATH.'/smarty/Smarty.class.php';
//加载自定义TPL
function __autoload($_className) {
	//   $_className = lcfirst($_className);
	if(substr($_className,-6) == 'Action') {
		require ROOT_PATH.'/controller/'.$_className.'.class.php';
	} else if(substr($_className,-5) == 'Model') {
		require ROOT_PATH.'/model/'.$_className.'.class.php';
	}elseif(substr($_className,-5) == 'Check') {
		
		require ROOT_PATH.'/check/'.$_className.'.class.php';
		
	} else {
		// print_r($_className);
		require ROOT_PATH.'/public/'.$_className.'.class.php';
	}
}

//single entry
Factory::setAction()->run();



?>
