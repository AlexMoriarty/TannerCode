$(function() {

	//定时器
	var timer = null;
	timer = setInterval(hiddenself, 1000);

	function hiddenself() {
		$(".showinfo-wrap").css({
				"display": "none"
			})
	}
	
	

	
	$(".personal-pic").each(function() {
		$(this).hover(function() {
			clearInterval(timer); //停止定时器
			var picTop = $(this).offset().top;
			var picLeft = $(this).offset().left;
			$(".showinfo-wrap").css({
				"display": "block",
				"left": picLeft,
				"top": picTop + 45
			})
		},function(){
			timer = setInterval(hiddenself, 500);
		})
	})
	
	$(".comment-name").each(function() {
		$(this).hover(function() {
			clearInterval(timer); //停止定时器
			var picTop = $(this).offset().top;
			var picLeft = $(this).offset().left;
			$(".showinfo-wrap").css({
				"display": "block",
				"left": picLeft,
				"top": picTop + 15
			})
		},function(){
			timer = setInterval(hiddenself, 500);
		})
	})
	
	$(".hot-user-info a").each(function(i) {
		$(".hot-user-info a").eq(i).hover(function() {
			clearInterval(timer); //停止定时器
			var picTop = $(".hot-user-info a").eq(i).offset().top;
			var picLeft = $(".hot-user-info a").eq(i).offset().left;
			$(".showinfo-wrap").css({
				"display": "block",
				"left": picLeft,
				"top": picTop + 15
			})
		},function(){
			timer = setInterval(hiddenself, 500);
		})
	})
	
	
	$(".showinfo-wrap").hover(function(){
		clearInterval(timer); //停止定时器	
	},function(){
		timer = setInterval(hiddenself, 500);
	})
	
	
	
	
	
})