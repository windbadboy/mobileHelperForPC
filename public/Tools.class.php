<?php
class Tools {
    
    //获取客户端IP
    static public function getIP() {
        return $_SERVER["REMOTE_ADDR"];
    }
    
    static public function getDate() {
        
        return date('Y-m-d H:i:s');
    }
    
    //表单提交字符转义
    static public function setFormString($_string) {
    	if(!get_magic_quotes_gpc()) {
    		if(validate::isArray($_string)) {
    			foreach ($_string as $key => $value) {
    				$_string[$key] = self::setFormString($value);//if don't support,use addslashes()
    			}
    		} else {
    			return addslashes($_string);
    		}
    	}
    	
    	return $_string;
    }
    
    //得到上一页
    static public function getPrevPage() {
    	return $_SERVER["HTTP_REFERER"];
    }
}
?>