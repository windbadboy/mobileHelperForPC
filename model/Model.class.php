<?php

class Model extends DB {
	protected  $_db;
	protected  $_fields = array();
	protected  $_tables = array();
	protected function __construct() {
		$this->_db = parent::getInstance();
	}
	protected function add($_addData,$_tables) {
		return $this->_db->add($_addData,$_tables);
	}
	
	protected function isOne($_where,$_tables) {
		return $this->_db->isOne($_where,$_tables);
	}
	
}

?>