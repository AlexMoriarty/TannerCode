/**
 * Created by Tanner on 2017/7/27.
 */
$(function() {
	//定义图片数组,模拟从后台拿图片
	var arrImg = ['img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/1.jpg'];

	//自动添加图片的函数
	var initPic = function() {
		for(var i = 0; i < arrImg.length; i++) {
			$(".slider").append('<li><img src=' + arrImg[i] + '></li>')
		}
	}
	initPic();

	//动态生成轮播图小点函数
	var initDot = function() {
		for(var i = 0; i < arrImg.length; i++) {
			$(".dot").append('<li></li>')
		}
		//使dot居中显示
		$(".dot").css('marginLeft', -$('.dot').width() / 2);
	}
	initDot();

	//轮播图上的切换按钮
	$(".slider-box").hover(function() {
		$(".slider-box .arrow").css('display', 'block');
		clearInterval(timer); //停止定时器
	}, function() {
		$(".slider-box .arrow").css('display', 'none');
		timer = setInterval(autoPlay, 2000); //开启定时器
	});

	$(".arrow").each(function() {
		$(this).hover(function() {
			$(this).css('opacity', '.8');
		}, function() {
			$(this).css('opacity', '.2')
		})
	})

	//图片切换函数
	var picChange = function(index) {
		var speed = 1000; //设置一个切换的速度
		var ImgWidth = $(".slider img").width(); //获取图片的宽度
		var changeNum = -ImgWidth * index; // 因为是往左走所以是负的
		$('.slider').stop().animate({
			'left': changeNum
		}, speed);
	}

	//	点击按钮切换轮播图
	var num = 0; //定义了一个数字用于图片切换
	$(".next").click(function() {
		autoPlay()
	});

	$(".prev").click(function() {
		num--;
		if(num < 0) {
			num = $('.slider li').length - 1;
		}
		picChange(num);
		dotChange(num);
	});

	//点击小点切换图片
	$(".dot li").each(function(i) {
		$(".dot li").eq(i).click(function() {
			dotChange(i);
			picChange(i);
			num = i;
		})
	});

	//小点根据图片切换函数
	var dotChange = function(index) {
		$(".dot li").removeClass('active').eq(index).addClass('active');
	}
	dotChange(num);

	//定时器
	var timer = null;
	timer = setInterval(autoPlay, 2000);

	function autoPlay() {
		num++;
		if(num > $('.slider li').length - 1) {
			num = 0;
		}
		picChange(num);
		dotChange(num);
	}
});