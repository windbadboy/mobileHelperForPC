<?php

class ManageCheck extends Check {
	
	public function check(&$_model) {
		if (self::isNullString($this->_data['user'])) {
			$this->_message[] = '管理员用户名不得为空.';
			$this->_flag = false;
		}
		if (self::checkStrLength($this->_data['user'],2,'min')) {
			$this->_message[] = '管理员用户名不得小于2位.';
			$this->_flag = false;
		}
		if (self::checkStrLength($this->_data['user'],20,'max')) {
			$this->_message[] = '管理员用户名不得大于2位.';
			$this->_flag = false;
		}
		if (self::checkStrLength($this->_data['pass'],6,'min')) {
			$this->_message[] = '管理员密码不得小于6位.';
			$this->_flag = false;
		}
		if (!self::checkEquals($this->_data['pass'],$this->_data['notpass'])) {
			$this->_message[] = '管理员密码不一致.';
			$this->_flag = false;
		}
		
		if ($_model->isOne()) {
			$this->_message[] = '用户名被占用.';
			$this->_flag = false;
		}
		
		return $this->_flag;
	}
}

?>