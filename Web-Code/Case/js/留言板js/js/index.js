window.onload = function() {

	var oMessageList = document.getElementById('message_list');
	var oWriteArea = document.getElementById('write_area');
	var oSubmitBtn = document.getElementById('submit_btn');
	var oNoComment = document.getElementById('no_comment');
	var oDelComment = document.getElementById('del_comment');
	var oMaxNum = document.getElementById('max_num');
	var oTips = document.getElementById('tips');
	var aMessage = getClass('message')
	var aDelComment = getClass('del-comment')

	//定义一个变量用于改变楼层数
	var num = 0;
	
	//定义输入的字数限制
	var initnum = 300;
    oMaxNum.innerHTML = initnum;

	//点击提交按钮的进行的相关操作
	oSubmitBtn.onclick = function() {
		//点击时判断文本域内是否有内容
		if(oWriteArea.value == '') {
			alert('请先输入评论的内容')
		} else {
			num++;

			//获取文本域内容
			var str = oWriteArea.value;

			//拼接字符串
			var sLi = '<li class="message">' +
				'<div class="message-top">' +
				'<h6>第<span>' + num + '</span>楼</h6>' +
				'<span class="date">' + showTime() + '</span>' +
				'</div>' + '<p>' + str + '</p>' +
				'<div class="del-box">' +
				'<span class="del-comment">删除</span>' +
				'</div>' +
				'</li>';

			noComment();

			//把拼接好的字符串添加到ul中
			oMessageList.innerHTML += sLi;

			//当评论添加到评论区后把文本域内的内容清空
			oWriteArea.value = '';
			
			//把最大输入限制还原
			oMaxNum.innerHTML = initnum;

		}
	}

	// 文本域获取焦点
	oWriteArea.onfocus = function(){
		oMaxNum.innerHTML = oMaxNum.innerHTML;
		oTips.style.display = 'block';
	}
	// 文本域失去焦点
	oWriteArea.onblur = function(){
		oTips.style.display = 'none';
	}
	
	//文本域键盘抬起时计算最大字符
	oWriteArea.onkeyup = function(){
		var length = oWriteArea.value.length;
		oMaxNum.innerHTML = initnum-length;
	}

	//把鼠标移入评论区li中的出现删除的操作
	function showDel(e) {
		e = e || window.event;　 //IE window.event
		var t = e.target || e.srcElement; //目标对象
		var classname = t.className;
		if(classname == 'message') {
			t.children[2].style.display = 'block';
		}
	}
	addEventHandler(oMessageList, 'mouseover', showDel);

	//把鼠标移出评论区li中的隐藏删除的操作
	function hiddenDel(e) {
		e = e || window.event;　 //IE window.event
		var t = e.target || e.srcElement; //目标对象
		var classname = t.className;
		if(classname == 'message') {
			t.children[2].style.display = 'none';
		}
	}
	addEventHandler(oMessageList, 'mouseout', hiddenDel);

//	for (var i = 0; i < aMessage.length; i++) {
//		var index = i;
//		aMessage[i].onmouseover = function(){
//			this.children[2].style.display = 'block';
//		}
//	}

	//把点击删除删除评论
	function DelCom(e) {
		e = e || window.event;　 //IE window.event
		var t = e.target || e.srcElement; //目标对象
		var classname = t.className;
		if(classname == 'del-comment') {
			oMessageList.removeChild(t.parentNode);
		}
	}
	addEventHandler(oMessageList, 'click', DelCom);


	
	
	// 获取系统时间,并格式化的函数
	function showTime() {
		var date = new Date();
		var seperator1 = "-";
		var seperator2 = ":";
		var month = date.getMonth() + 1;
		var strDate = date.getDate();
		var strHours = date.getHours();
		var strMinutes = date.getMinutes();
		var strSeconds = date.getSeconds();

		if(month >= 1 && month <= 9) {
			month = "0" + month;
		}
		if(strDate >= 0 && strDate <= 9) {
			strDate = "0" + strDate;
		}
		if(strHours >= 0 && strHours <= 9) {
			strHours = "0" + strHours;
		}
		if(strMinutes >= 0 && strMinutes <= 9) {
			strMinutes = "0" + strMinutes;
		}
		if(strSeconds >= 0 && strSeconds <= 9) {
			strSeconds = "0" + strSeconds;
		}
		var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate +
			" " + strHours + seperator2 + strMinutes +
			seperator2 + strSeconds;
		return currentdate;
	}

	// 判断评论区是否有评论,来显示暂无评论的方法函数
	function noComment() {
		if(oMessageList.innerHTML == '') {
			oNoComment.style.display = 'block';
		} else {
			oNoComment.style.display = 'none';
		}
	}

	// 封装的通过class获取对象的方法
	function getClass(classnames) {
		var classobj = new Array(); //定义数组 

		var classint = 0; //定义数组的下标 

		var tags = document.getElementsByTagName("*"); //获取HTML的所有标签 

		for(var i in tags) { //对标签进行遍历 

			if(tags[i].nodeType == 1) { //判断节点类型 

				if(tags[i].getAttribute("class") == classnames) //判断和需要CLASS名字相同的，并组成一个数组 

				{

					classobj[classint] = tags[i];

					classint++;

				}

			}

		}

		return classobj; //返回组成的数组 

	}

	//	封装的监听事件函数 
	function addEventHandler(oTarget, sEventType, fnHandler) {

		if(oTarget.addEventListener) { //监听IE9，谷歌和火狐  
			oTarget.addEventListener(sEventType, fnHandler, false);

		} else if(oTarget.attachEvent) { //IE  
			oTarget.attachEvent("on" + sEventType, fnHandler);

		} else {
			oTarget["on" + sEventType] = fnHandler;

		}

	}
}