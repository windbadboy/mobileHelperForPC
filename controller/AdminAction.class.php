<?php

class AdminAction extends Action {
	public function __construct($_tpl) {
		parent::__construct();
	}
	
	public function index() {
		$this->_tpl->display(SMARTY_BACK.'public/admin.tpl');
	}
	
	public function main() {
		$this->_tpl->display(SMARTY_BACK.'public/main.tpl');
	}
	

}

?>