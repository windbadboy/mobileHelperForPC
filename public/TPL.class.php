<?php

class TPL extends Smarty {
	
	//用于存放实例化对象
	static private $_instance;
	
	//公共静态方法获取 实便化对象
	static public function getInstance() {
		if(!(self::$_instance instanceof  self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	

	
	//私有化构造
	public function __construct() {
		
		$this->setConfigs();
		
	}
	
	//私有化克隆
	private function __clone() {}
	
	private function setConfigs() {
	
		//缓存关闭
		$this->caching = SMARTY_CACHING;
		//模板目录
		$this->template_dir = SMARTY_TEMPLATE_DIR;
		
		//编译目录
		$this->compile_dir = SMARTY_COMPILE_DIR;
		
		//配置变量目录
		$this->config_dir = SMARTY_CONFIG_DIR;
		
		//缓存目录
		$this->cache_dir = SMARTY_CACHE_DIR;
		
		
		$this->cache_lifetime = SMARTY_CACHE_LIFETIME;
		$this->left_delimiter = SMARTY_LEFT_DELIMITER;
		$this->right_delimiter = SMARTY_RIGHT_DELIMITER;
	}
	
	
}

?>