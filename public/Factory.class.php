<?php

class Factory {
	
	private static $_obj;
	
	static public function setAction() {
		$_p=self::getP();
		if (!file_exists(ROOT_PATH.'/controller/'.ucfirst($_p).'Action.class.php')) $_p='Index';
		eval('self::$_obj = new '.ucfirst($_p).'Action();');
		return self::$_obj;
		
	}
	
	static public function setModel() {
		$_p=self::getP();
		if (file_exists(ROOT_PATH.'/model/'.ucfirst($_p).'Model.class.php')) eval('self::$_obj = new '.ucfirst($_p).'Model();');		
		return self::$_obj;
	}
	
	static public function setCheck() {
		$_p=self::getP();
		if (file_exists(ROOT_PATH.'/check/'.ucfirst($_p).'Check.class.php')) eval('self::$_obj = new '.ucfirst($_p).'Check();');
		return self::$_obj;
	}

	static public function getP() {
		if (isset($_GET['p']) && !empty($_GET['p'])) {
			return $_GET['p'];
		}
		return 'Index';
	}
	
	
}


?>