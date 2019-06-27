<?php

class Model extends DB {
	protected  $_db;
	protected  $_fields = array();
	protected  $_tables = array();
	protected $_check = null;
	protected $_request = null;
	protected function __construct(&$_model,&$_check) {
		$this->_db = parent::getInstance();
		$this->_check = $_check;
		$this->_request = Request::getInstance($_model,$_check);
	}
	protected function add($_addData,$_tables) {
		return $this->_db->add($_addData,$_tables);
	}
	
	protected function isOne($_where,$_tables) {
		return $this->_db->isOne($_where,$_tables);
	}
	
}

?>