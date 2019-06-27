<?php
//smart配置文件，样式替换,皮肤
define('SMARTY_STYLE', 'default/');
define('SMARTY_BACK', 'admin/');
//模板目录
define('SMARTY_TEMPLATE_DIR', ROOT_PATH.'/view/');
//编译目录
define('SMARTY_COMPILE_DIR', ROOT_PATH.'/compile/');
//配置变量目录
define('SMARTY_CONFIG_DIR', ROOT_PATH.'/configs/');
//缓存目录
define('SMARTY_CACHE_DIR', ROOT_PATH.'/cache/');
//缓存的声明周期
define('SMARTY_CACHE_LIFETIME', 60*60*24);
//左定界符
define('SMARTY_LEFT_DELIMITER', '{');
//右定界符
define('SMARTY_RIGHT_DELIMITER', '}');
//缓存关闭
define('SMARTY_CACHING', 0);
//设置数据库连接参数
define('DB_DNS','mysql:host=localhost;dbname=xxx');
define('DB_USER','root');
define('DB_PASS','xxx');
define('DB_CHARSET','UTF8');
define('DB_PREFIX','MH_');
?>
