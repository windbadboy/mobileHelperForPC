<?php
//验证类
class Validate {
    //判断是否是数组
    static public function isArray($_array) {
        return is_array($_array) ? true : false;
    }
    
    //判断数组是否有元素
    static public function isNullArray($_array) {
        return count($_array) == 0 ? true : false;
    }
    
    //判断字段是否在指定数组中
    static public function inArray($_key,$_fields) {
        return in_array($_key,$_fields) ? true : false;
    }
    
    //判断字符串是否为空
    static public function isNullString($_string) {
    	return empty($_string) ? true : false;
    }
    
    //检查字符串长度
    static public function checkStrLength($_string,$_length,$_flag,$_charset = 'utf-8') {
    	if($_flag == 'min') {
    		if(mb_strlen(trim($_string,$_charset))<$_length) return true;
    		return false;
    	}elseif($_flag == 'max') {
    		if(mb_strlen(trim($_string,$_charset))>$_length) return true;
    		return false;
    	}elseif($_flag == 'equals') {
    		if(mb_strlen(trim($_string,$_charset))!=$_length) return true;
    		return false;
    	}
    }
    
    //检查数据是否一致
    static public function checkEquals($_string,$_anotherstring) {
    	if(trim($_string) == trim($_anotherstring)) return true;
    	return false;
    }
}
?>