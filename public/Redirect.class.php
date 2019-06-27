<?php

class Redirect {
	//用于存放实例化对象
	static private $_instance;
	
	static private $_tpl;
	//公共静态方法获取 实便化对象
	static public function getInstance(&$_tpl) {
		if(!(self::$_instance instanceof  self)) {
			self::$_instance = new self();
			self::$_instance->_tpl = $_tpl;
		}
		return self::$_instance;
	}
	
	//私有化构造
	private function __construct() {}
	
	//私有化克隆
	private function __clone() {}
	
	public function succ($_url,$_info) {
		$this->_tpl->assign('message',$_info);
		$this->_tpl->assign('url',$_url);
		$this->_tpl->display(ROOT_PATH.'/view/admin/public/succ.tpl');
		exit();
	}
	
	public function error($_info) {
		$this->_tpl->assign('message',$_info);
		$this->_tpl->assign('prev',Tools::getPrevPage());
		$this->_tpl->display(ROOT_PATH.'/view/admin/public/error.tpl');
		exit();
	}
}

?>