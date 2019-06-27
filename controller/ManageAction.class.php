<?php

class ManageAction extends Action {
	public function __construct($_tpl) {
		parent::__construct(Factory::setModel(),Factory::setCheck());
	}
	
	public function index() {
		$this->_tpl->display(SMARTY_BACK.'manage/manage.tpl');
	}
	public function add() {
		if (isset($_POST['send']))  { 
			if ($this->_model->add()) {
				//新增成功，跳转成功提示页
				$this->_redirect->succ('?p=manage','管理员新增成功');
			} else {
				//新增失败，跳转到失败页
				$this->_redirect->error('管理员新增失败');
			}
		}
	    $this->_tpl->display(SMARTY_BACK.'manage/add.tpl');
	}
	public function update() {
	    $this->_tpl->display(SMARTY_BACK.'manage/update.tpl');
	}
	
	public function isUser() {
		$this->_model->isUser();
	}
}
?>