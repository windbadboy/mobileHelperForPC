<?php

class DB {
	//pdo object
	private $_pdo;
	//用于存放实例化对象
	static private $_instance;
	
	//公共静态方法获取 实便化对象
	static protected function getInstance() {
		if(!(self::$_instance instanceof  self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	
	
	//私有化构造
	private function __construct() {
		
		try {
			$this->_pdo = new PDO(DB_DNS,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES '.DB_CHARSET));
			$this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		} catch (PDOException $e) {
			exit($e->getMessage());
		}
		
	}
	
	//私有化克隆
	private function __clone() {}
	
	protected function add($_addData,$_tables) {
		$_addFields = array();
		$_addValues = array();
		foreach ($_addData as $_key=>$_value) {
			$_addFields[] = $_key;
			$_addValues[] = $_value;
		}
		$_addFields = implode(',',$_addFields);
		$_addValues = implode("','",Tools::setFormString($_addValues));
		$_sql = "INSERT INTO $_tables[0] ($_addFields) VALUES ('$_addValues')";

//		print($_sql);
// 	    $_stmt = $this->_pdo->prepare($_sql);
// 	    $_stmt->execute();
// 	    return $_stmt->rowCount();
		return $this->execute($_sql);
	}
	
	//验证一条数据
	protected function isOne($_where,$_tables) {
		$_isAnd = '';
		foreach ($_where as $_key=>$_value) {
			$_isAnd .= "$_key='$_value' AND ";
		}
		$_isAnd = substr($_isAnd,0,-4);
		$_sql = "SELECT id FROM $_tables[0] where $_isAnd LIMIT 1";
		//echo $_sql;
		return $this->execute($_sql);
	}
	
	//执行并返回影响行数
	private function execute($_sql) {
	    $_stmt = $this->_pdo->prepare($_sql);
	    $_stmt->execute();
	    return $_stmt->rowCount();
	}
}