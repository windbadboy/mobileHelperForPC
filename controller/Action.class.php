<?php

class Action {
	protected $_tpl = null;
	protected  $_model = null;
// 	protected $_check = null;
// 	protected $_redirect = null;
	protected function __construct(&$_model=null,&$_check=null) {
		//创建一个Smarty对象
		$this->_tpl = TPL::getInstance();
		$this->_model = $_model;
// 		$this->_check = $_check;
		$this->_redirect = Redirect::getInstance($this->_tpl);
// 		$this->_request = Request::getInstance($this->_model,$this->_check);
	}
	
	public function run() {
		$_m = isset($_GET['m']) ? $_GET['m'] : 'index';
		method_exists($this, $_m) ? eval('$this->'.$_m.'();') : $this->index();
	}
}

?>