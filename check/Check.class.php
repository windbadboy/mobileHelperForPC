<?php

//验证基类
class Check extends Validate {
	//判断验证是否通过，默认通过
	protected $_flag = true;
	//错误消息集
	protected $_message = array();
	//表单提交数据
	protected $_data = array();
	
	//初始化
	public function __construct() {
		$this->_data = $_POST;
	}
	
	//获取消息集
	public function getMessage() {
		return $this->_message;
	}
}

?>