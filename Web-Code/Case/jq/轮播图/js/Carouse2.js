/**
 * Created by alex on 2017/7/18.
 */
/**
 * Created by LX on 2017/7/17.
 */
$(function () {
    var num1 = 0;
    var arrImg = ['img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/1.jpg'];


    initPic();
    initDot();
    picChange(num1);
    dotChange(num1);


    //轮播图上的切换按钮
    $("#banner-box2").hover(function () {
        $("#banner-box2 span").css('display', 'block');
        clearInterval(timer1);
    }, function () {
        $("#banner-box2 span").css('display', 'none');
        timer1 = setInterval(autoPlay, 2000);
    });

    $("#banner-box2 .left").hover(function () {
        $(this).css('opacity', '.8');
    }, function () {
        $(this).css('opacity', '.2');
    });
    $("#banner-box2 .right").hover(function () {
        $(this).css('opacity', '.8');
    }, function () {
        $(this).css('opacity', '.2');
    });

    //点击按钮切换轮播图

    $("#banner-box2 .left").click(function () {
        num1--;
        if (num1 < 0) {
            num1 = $('#banner1 li').length - 1;
        }
        picChange(num1);
        dotChange(num1);

    });
    $("#banner-box2 .right").click(function () {
        num1++;
        if (num1 > $('#banner2 li').length - 1) {
            num1 = 0;
        }
        picChange(num1);
        dotChange(num1);
    });


    //点击小点切换图片
    $("#dot2 li").each(function (i) {
        $("#dot2 li").eq(i).click(function () {
            dotChange(i);
            picChange(i);
            num1 = i;
        }).mouseover(function () {
            dotChange(i);
            picChange(i);
            num1 = i;
        })
    });


    //图片切换函数
    function picChange(index) {
        var speed = 1000;
        // var changeNum = -800 * index;
        $("#banner2 li").eq(index).stop().fadeIn(speed).siblings().stop().fadeOut(speed);
    }

    //自动添加图片
    function initPic() {
        for (var i = 0; i < arrImg.length; i++) {
            $("#banner2").append('<li><img src=' + arrImg[i] + '></li>')
        }
    }

    //动态生成轮播图小点函数
    function initDot() {
        for (var i = 0; i < arrImg.length; i++) {
            $("#dot2").append('<li></li>')
        }
        //使dot居中显示
        $("#dot2").css('marginLeft', -$('#dot2').width() / 2);
    }

    //小点根据图片切换函数
    function dotChange(index) {
        $("#dot2 li").removeClass('active').eq(index).addClass('active');
    }

    //定时器
    var timer1 = null;
    timer1 = setInterval(autoPlay, 2000);
    function autoPlay() {
        num1++;
        if (num1 > $('#banner2 li').length - 1) {
            num1 = 0;
        }
        picChange(num1);
        dotChange(num1);
    }
});