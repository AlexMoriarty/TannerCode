/**
 * Created by alex on 2017/7/18.
 */
$(function () {
    var num1 = 0;
    var arrImg = ['img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/1.jpg'];

    initPic();
    initDot();
    dotChange(num1);

    //轮播图上的切换按钮
    $("#banner-box3").hover(function () {
        $("#banner-box3 span").css('display', 'block');
        clearInterval(timer1);
    }, function () {
        $("#banner-box3 span").css('display', 'none');
        timer1 = setInterval(autoPlay,2000);
    });

    $("#banner-box3 .left").hover(function () {
        $(this).css('opacity', '.8');
    }, function () {
        $(this).css('opacity', '.2');
    });
    $("#banner-box3 .right").hover(function () {
        $(this).css('opacity', '.8');
    }, function () {
        $(this).css('opacity', '.2');
    });

    //点击按钮切换轮播图

    $("#banner-box3 .left").click(function () {
        num1--;
        if (num1 < 0) {
            $("#banner3").css('left',-800*arrImg.length);
            num1 = arrImg.length - 1;
        }
        picChange(num1);
        dotChange(num1);

    });
    $("#banner-box3 .right").click(function () {
        num1++;
        if (num1 > arrImg.length ) {
            $("#banner3").css('left','0');
            num1 = 1;
        }
        picChange(num1);
        dotChange(num1);
    });


    //点击小点切换图片
    $("#dot3 li").each(function (i) {
        $("#dot3 li").eq(i).click(function () {
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
        var changeNum = -800 * index;
        $('#banner3').stop().animate({'left': changeNum}, speed);
    }

    //自动添加图片
    function initPic() {
        for (var i = 0; i < arrImg.length; i++) {
            $("#banner3").append('<li><img src=' + arrImg[i] + '></li>')
        }
        $(".banner li").first().clone().appendTo($("#banner3"));
    }

    //动态生成轮播图小点函数
    function initDot() {
        for (var i = 0; i < arrImg.length; i++) {
            $("#dot3").append('<li></li>')
        }
        //使dot居中显示
        $("#dot3").css('marginLeft', -$('#dot3').width() / 2);
    }

    //小点根据图片切换函数
    function dotChange(index) {
        if (index == 5){
            index = 0
        }
        $("#dot3 li").removeClass('active').eq(index).addClass('active');
    }

    //定时器
    var timer1 = null;
    timer1 = setInterval(autoPlay,2000);
    function autoPlay() {
        num1++;
        if (num1 > arrImg.length ) {
            $("#banner3").css('left','0');
            num1 = 1;
        }
        picChange(num1);
        dotChange(num1);
    }
});