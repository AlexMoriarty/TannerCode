$(function () {
    // 顶部导航小箭头
    $('.webside-list a').first().siblings().css('display', 'block');
    $('.webside-list a').hover(function () {
        $(this).siblings().css('display', 'block')
    }, function () {
        if (!$(this).hasClass('active')) {
            $(this).siblings().css('display', 'none')
        }
    });
    // end 顶部导航小箭头

    //判断活动是否过期
    //获取系统时间
    function judgeTime() {
        var date = new Date();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        var strYear = date.getFullYear();

        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }

        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }

        console.log(strYear, month, strDate);

        //判断年
        $.each($('.judge-y'), function () {
            if (parseInt($(this).text()) < strYear) {
                $(this).parent().parent().find(".active-join").css({
                    'background': '#aaa',
                    'color': 'red',
                    'borderColor': '#aaa'
                }).text('已截止')
            }
        });

        // 判断月
        $.each($('.judge-md'), function () {
            if (parseInt($(this).text()) < month) {
                $(this).parent().parent().find(".active-join").css({
                    'background': '#aaa',
                    'color': 'red',
                    'borderColor': '#aaa'
                }).text('已截止')
            }
        });

        //判断日
        $.each($('.judge-md'), function () {
            if (parseInt($(this).text().substr(3, 2)) < strDate && parseInt($(this).text()) == month) {
                $(this).parent().parent().find(".active-join").css({
                    'background': '#aaa',
                    'color': 'red',
                    'borderColor': '#aaa'
                }).text('已截止')
            }
        });
    }

    judgeTime();
    //end 判断活动是否过期

    //删除已过期的活动
    // function initTop() {
    //     $.each($('.active-item'), function () {
    //         // console.log($(this).find(".active-join").text());
    //         if ($(this).find(".active-join").text() == '已截止' || $(this).find(".active-join").text() == '已截止已截止') {
    //             $(this).remove();
    //         }
    //     });
    // }
    //
    // initTop();
    //end 删除已过期的活动
    //已过期的活动上移
    var topNum = 0;

    function initTop2() {
        $.each($('.active-item'), function () {
            if ($(this).find(".active-join").text() == '已截止' || $(this).find(".active-join").text() == '已截止已截止') {
                topNum += $(this).height() + 50;//50是盒子底部的margin-bottom的值
            }
        });
        console.log(topNum);
        $('.active-move').css('top', -topNum);
    }

    initTop2();
    //end 已过期的活动上移

    //点击箭头上下移动内容
    //算出只能移动的的高度
    var boxHeight = $('.active-content').height();
    var maxBoxHeight = $(".active-move").height();
    var stopNum = maxBoxHeight - boxHeight;
    var num = -topNum;

    //当前盒子的Top值
    var boxTop = parseInt($(".active-move").css('top'));

    //每次移动的值
    var speed = 200;


    // console.log('大小盒子的差值:'+targetNum+'...'+'当前盒子的Top值:'+boxTop+'...'+'速度:'+speed);

    $(".slide-bot").click(function () {
        boxTop = parseInt($(".active-move").css('top'));

        if (boxTop == 0) {
            alert('到顶啦');
        } else {
            if (Math.abs(boxTop) - speed <= 0) {
                // alert('直接到给定值');
                num = 0;
                $(".active-move").stop().animate({top: num}, 1000);

            } else {
                // alert('正常移动');
                num += speed;
                $(".active-move").stop().animate({top: num}, 1000);
                boxTop = parseInt($(".active-move").css('top'));
                // console.log('大小盒子的差值:'+targetNum+'...'+'当前盒子的Top值:'+boxTop+'...'+'num:'+num);

            }
        }
    });
    $(".slide-top").click(function () {
        boxTop = parseInt($(".active-move").css('top'));

        if (Math.abs(boxTop) == stopNum) {
            alert('到底啦');
        } else {
            if (Math.abs(boxTop - speed) > stopNum) {
                // alert('直接到给定值');
                num = -stopNum;
                $(".active-move").stop().animate({top: num}, 1000);


            } else {
                // alert('正常移动');
                $(".active-move").stop().animate({top: num -= speed}, 1000);

                // console.log('大小盒子的差值:'+targetNum+'...'+'当前盒子的Top值:'+boxTop+'...'+'num:'+num);

            }
        }
    });
    //end 点击箭头上下移动内容


    // 获取表格的日子
    // $(".ui-datepicker-prev").each(function () {

    // alert(datepickerMonth);
    var datepickerMonth = $('.ui-datepicker-month').text();
    $('.ui-datepicker-header a:first-child').click(function () {
        datepickerMonth = $('.ui-datepicker-month').text();
        alert(datepickerMonth);
    });
    // $('.ui-datepicker-next').click(function () {
    //     datepickerMonth = $('.ui-datepicker-month').text();
    //     alert(datepickerMonth);
    // });

    // $('.ui-datepicker-header').on('click','.ui-datepicker-prev',function () {
    //     datepickerMonth = $('.ui-datepicker-month').text();
    //     alert(datepickerMonth);
    // })





});