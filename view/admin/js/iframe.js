//window.onload function executes when the page is loaded
//window.onresize function executes when window touch event is triggered
window.onload = function () {(window.onresize = function() {
		//get visiable width
		var width = document.documentElement.clientWidth - 200;
		//get visiable height
		var height = document.documentElement.clientHeight - 80;
		//if has width,assign a value
		if (width >= 0) document.getElementById('main').style.width = width + 'px';
		if (height >= 0) {
			document.getElementById('sidebar').style.height = height + 'px';
			document.getElementById('main').style.height = height + 'px';
		}
		
	})()};