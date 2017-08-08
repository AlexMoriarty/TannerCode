/**
 * Created by LX on 2017/7/17.
 */
$(function () {
    var num = 0;
    var arrImg = ['img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/1.jpg'];

    var arrImg2 = ["img/h1.jpg","img/h2.jpg","img/h3.jpg","img/o1.jpg","img/o2.jpg","img/o3.jpg","img/s1.jpg","img/s2.jpg"];


    initPic();
    initDot();
    dotChange(num);

    initPic2();



    //轮播图上的切换按钮
    $(".banner-box").hover(function () {
        $(".banner-box span").css('display', 'block');
        clearInterval(timer);
    }, function () {
        $(".banner-box span").css('display', 'none');
        timer = setInterval(autoPlay,2000);
    });

    $(".left").hover(function () {
        $(this).css('opacity', '.8');
    }, function () {
        $(this).css('opacity', '.2');
    });
    $(".right").hover(function () {
        $(this).css('opacity', '.8');
    }, function () {
        $(this).css('opacity', '.2');
    });

    //点击按钮切换轮播图

    $(".left").click(function () {
        num--;
        if (num < 0) {
            num = $('.banner li').length - 1;
        }
        picChange(num);
        dotChange(num);

    });
    $(".right").click(function () {
        num++;
        if (num > $('.banner li').length - 1) {
            num = 0;
        }
        picChange(num);
        dotChange(num);
    });


    //点击小点切换图片
    $(".dot li").each(function (i) {
        $(".dot li").eq(i).click(function () {
            dotChange(i);
            picChange(i);
            num = i;
        }).mouseover(function () {
            dotChange(i);
            picChange(i);
            num = i;
        })
    });





    //图片切换函数
    function picChange(index) {
        var speed = 1000;
        var changeNum = -800 * index;
        $('.banner').stop().animate({'left': changeNum}, speed);
    }

    //自动添加图片
    function initPic() {
        for (var i = 0; i < arrImg.length; i++) {
            $(".banner").append('<li><img src=' + arrImg[i] + '></li>')
        }
    }

    //动态生成轮播图小点函数
    function initDot() {
        for (var i = 0; i < arrImg.length; i++) {
            $(".dot").append('<li></li>')
        }
        //使dot居中显示
        $(".dot").css('marginLeft', -$('.dot').width() / 2);
    }

    //小点根据图片切换函数
    function dotChange(index) {
        $(".dot li").removeClass('active').eq(index).addClass('active');
    }

    //定时器
    var timer = null;
    timer = setInterval(autoPlay,2000);
    function autoPlay() {
        num++;
        if (num > $('.banner li').length - 1) {
            num = 0;
        }
        picChange(num);
        dotChange(num);
    }



    //自动添加图片
    function initPic2() {
        for (var i = 0; i < arrImg2.length; i++) {
            $(".pic-list").append('<li><img src=' + arrImg2[i] + '><span>你个傻蛋效果</span></li>')
        }
    }

    //图片效果
    $(".pic-list li").each(function (i) {
       $(this).hover(function () {
           $(this).children().css({'width':350,'height':350});
           // $(this).children().animate({'opacity':.2})
           $(this).children('img').fadeTo("slow",.3);
           $(this).children('span').slideDown('5000');

        },function () {
           $(this).children().css({'width':250,'height':250});
           // $(this).children().animate({'opacity':1})
           $(this).children('img').fadeTo("100", 1);
           $(this).children('span').slideUp('100');

       })
    });


//    下拉列表
    $(".slide").hover(function () {
       $('.list-content').stop().slideDown()
    },function () {
        $('.list-content').stop().slideUp()

    })

});