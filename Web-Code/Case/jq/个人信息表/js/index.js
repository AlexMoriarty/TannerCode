/**
 * Created by LX on 2017/7/14.
 */
$(function () {
    //让所有的input只读
    $(':input').attr('readonly', true);

    //头像数组
    var arrImg = ['img/img_001.jpg', 'img/img_002.jpg', 'img/img_003.jpg', 'img/img_004.jpg', 'img/img_005.jpg', 'img/img_006.jpg', 'img/img_007.jpg', 'img/img_008.jpg', 'img/img_009.jpg', 'img/img_010.jpg', 'img/img_011.jpg'];

    //判断鼠标移入和移出显示编辑和删除
    $(".people").each(function () {
        $(this).hover(function () {
            $(this).children(".shade-box").css('display', 'block')
        }, function () {
            $(this).children(".shade-box").css('display', 'none')
        });
    });

    //点击编辑按钮,进入修改模式并出现完成按钮
    $(".write").click(function () {
        $(this).next().css('display', 'block');
        $(this).parent().parent().find('input[type=text],textarea').attr('readonly', false);
        $(this).parent().parent().find('input[type=text],textarea').css('border', '1px solid #ccc');
    });

    //点击完成按钮,退出编辑模式
    $(".oky").click(function () {
        $(':input').attr('readonly', true).css('border', 'none');
        $(this).css('display', 'none');
    });

    //删除人
    $(".del").click(function () {
        $(this).parent().parent().remove();
    });


    //克隆
    $('.clone').click(function () {
        $(".people").last().clone(true).prependTo(".wrap-box");
    });

    //点击头像通过promp交互更换头像
    $('.pic').each(function () {
        $(this).click(function () {
            var display = $(this).siblings('.shade-box').children('.oky').css('display');
            if (display == 'block') {
                var num = window.prompt("请输入图片序号0~11", "");
                if (Number(num) < 11 && Number(num) > -1 && num % 1 === 0) {
                    // alert('成功');
                    $(this).children('img').attr('src', arrImg[num])
                } else {
                    alert("请输入正确的编码");
                }
            }
        })
    });

});


