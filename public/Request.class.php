<?php

class Request {
    //用于存放实例化对象
    static private $_instance;
    //验证对象
    private $_check = null;
    
    //模板对象
    private $_tpl = null;
    
    //实体对象
    private $_model = null;
    
    //公共静态方法获取 实便化对象
    static public function getInstance(&$_model,&$_check) {
        if(!(self::$_instance instanceof  self)) {
            self::$_instance = new self();
            self::$_instance->_check = $_check;
            self::$_instance->_tpl = TPL::getInstance();
            self::$_instance->_model = $_model;
        }
        return self::$_instance;
    }
    
    
    
    //私有化构造
    private function __construct() {}
    
    //私有化克隆
    private function __clone() {}
    
    //处理新增请求
    public function add($_fields) {
        $_addData = array();
        if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
            //验证数据的合法性
            if(!$this->_check->check($this->_model)) {
            	$this->_tpl->assign('message',$this->_check->getMessage());
            	$this->_tpl->assign('prev',Tools::getPrevPage());
            	$this->_tpl->display(ROOT_PATH.'/view/admin/public/error.tpl');
            	exit();
            }
        	//筛选字段
        	foreach ($_POST as $_key=>$_value) {
                if (Validate::inArray($_key,$_fields)) {
                    $_addData[$_key] = $_value;
                }
            }
        }

        return $_addData;
        
    }
}

?>