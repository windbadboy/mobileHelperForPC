function addManager() {
	//获取名称为"add"的元素(这里是form)
	var fm = document.add;
	if (fm.user.value == '') {
		alert('管理员用户名不得为空.');
		fm.user.focus();
		return false;
	}
	
	if (fm.user.value.length < 2) {
		alert('管理员用户名不得小于2位.');
		fm.user.focus();
		return false;
	}
	
	if (fm.user.value.length > 20) {
		alert('管理员用户名不得大于20位.');
		fm.user.focus();
		return false;
	}
	
	if (fm.pass.value.length < 6) {
		alert('管理员密码不得小于6位.');
		fm.pass.focus();
		return false;
	}
	
	if (fm.pass.value != fm.notpass.value) {
		alert('管理员密码不一致.');
		fm.pass.focus();
		return false;
	}	
	if (fm.flag.value != '') {
		alert('用户名被占用.');
		fm.user.focus();
		return false;
	}	
	return true;
}

function checkUser(){
    var user = document.getElementById("user");
    var flag = document.getElementById("flag");
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"POST",
        sync:false,
        url:'?p=manage&m=isUser',
        data:"user="+user.value,
        success: function(msg) {
            if(msg==1){
            	//用户名被占用
                flag.value = 'true';
            } else {
                flag.value = '';
            }
        },
        failure: function(a) {
            alert(a);
        },
        soap:this
    });
}