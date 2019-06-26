<?php

class DetailsAction extends Action {
	
	public function __construct($_tpl) {
		parent::__construct();
	}
	
	//实现初始页面
	public function index() {
		$this->_tpl->assign('name','移动护工管理系统');
		$this->_tpl->display(SMARTY_STYLE.'details.tpl');
	}
}

?>