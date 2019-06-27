<?php
class ManageModel extends Model {
    public  function  __construct() {
        parent::__construct($this,Factory::setCheck());
        $this->_fields = array('user','pass','level','login_count','last_ip','last_login_time','reg_time','status');
        $this->_tables = array(DB_PREFIX.'manager');
    }
    
    public function add() {
        $_addData =$this->_request->add($this->_fields);
        $_addData['last_ip'] = Tools::getIP();
        $_addData['last_login_time'] = Tools::getDate();
        $_addData['pass'] = md5($_addData['pass']);
        return parent::add($_addData,$this->_tables);
    }
    
    public function isOne($_where) {
    	return parent::isOne($_where,$this->_tables);
    }
    
    public function isUser() {
    	$this->_check->ajax($this);
    }
}
?>
