<?php

class ManageAction extends Action {
	public function __construct($_tpl) {
		parent::__construct(Factory::setModel(),Factory::setCheck());
	}
	
	public function index() {
		$this->_tpl->display(SMARTY_BACK.'manage/manage.tpl');
	}
	public function add() {
		if (isset($_POST['send'])) echo $this->_model->add(Request::getInstance($this->_model,$this->_check));
	    $this->_tpl->display(SMARTY_BACK.'manage/add.tpl');
	}
	public function update() {
	    $this->_tpl->display(SMARTY_BACK.'manage/update.tpl');
	}
}

?>