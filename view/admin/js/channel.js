//导航切换
function channel(j) {
	//获取所有在dl标签
	var dl = document.getElementsByTagName('dl');
	for (var i = 0; i < dl.length; i++) {
		dl[i].style.display = 'none';
	}
	dl[j].style.display = 'block';
}