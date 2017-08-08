/**
 * Created by alex on 2017/7/16.
 */
$(function () {
    var arrOpImg = ['img/o1.jpg', 'img/o2.jpg', 'img/o3.jpg'];
    var arrHyImg = ['img/h1.jpg', 'img/h2.jpg', 'img/h3.jpg'];
    var arrKnImg = ['img/k1.jpg', 'img/k2.jpg'];
    var arrSqImg = ['img/s1.jpg', 'img/s2.jpg', 'img/s3.jpg'];

    var arrOpTitle = ['索隆', '梅里号', '乔巴'];
    var arrHyTitle = ['鸣人', '卡卡西', '我爱罗'];
    var arrKnTitle = ['剧场版8', '剧场版12'];
    var arrSqTitle = ['兄弟', '小豪', '咬我啊'];

    var arrBigTitle = ['海贼王','火影忍者','柯南','四驱兄弟'];

    // addPic(arrOpImg, arrOpTitle);
    // addPic(arrHyImg, arrHyTitle);
    // addPic(arrSqImg, arrSqTitle);
    // addPic(arrKnImg, arrKnTitle);


    // var fn = [addPic(arrOpImg, arrOpTitle),addPic(arrHyImg, arrHyTitle),addPic(arrKnImg, arrKnTitle),addPic(arrSqImg, arrSqTitle)];

    var arrFnTab1 = ['arrOpImg','arrHyImg','arrKnImg','arrSqImg'];
    var arrFnTab2 = ['arrOpTitle','arrHyTitle','arrKnTitle','arrSqTitle'];


    // var json = {
    //     arrOpImg:['img/o1.jpg', 'img/o2.jpg', 'img/o3.jpg'],
    //     arrHyImg:['img/h1.jpg', 'img/h2.jpg', 'img/h3.jpg'],
    //     arrKnImg:['img/k1.jpg', 'img/k2.jpg'],
    //     arrSqImg:['img/s1.jpg', 'img/s2.jpg', 'img/s3.jpg']
    // };

    //生成图片块函数
    function addPic(img, title) {
        //定义小标题,并循环生成
        var str = '';
        for (var j = 0; j < img.length; j++) {
            str += '<li>' + title[j] + '</li>';
            $('.pic-title-list').html(str);
        }

        $('.pic img').attr('src', img[0]);
        $('.pic-title-list li').first().addClass('active1');

        $('.pic-title-list li').each(function () {
            $(this).click(function () {
                // alert(111);
                $(this).parent().parent().children('.img-pic').attr('src', img[$(this).index()]);
                $(this).parent().children().removeClass('active1');
                $(this).addClass('active1');
            })
        })

    }





    //定义大标题,并循环生成
    var strBigTitle = '';
    for (var j = 0; j < arrBigTitle.length; j++) {
        strBigTitle += '<li>' + arrBigTitle[j] + '</li>';
        $('.title-list').html(strBigTitle);
    }

    //初始化
    addPic(arrOpImg, arrOpTitle);
    $('.title-list li').first().addClass('active2');

//鼠标移入切换(方法一)
//     $(".title-list li").each(function () {
//         $(this).mouseover(function () {
//             addPic(arrOpImg, arrOpTitle);
//
//             var that = $(this).index();
//             // console.log(that);
//             //
//             // console.log(arrFnTab1[that]);
//             // console.log(arrFnTab2[that]);
//
//             addPic(arrFnTab1[that], arrFnTab2[that]);
//
//
//         })
//     });

    // for (var i=0; i<$(".title-list li").length; i++) {
    //     (function (i) {
    //         $(".title-list li")[i].onmouseover = function () {
    //
    //         }
    //
    //     })(i)
    // }






//鼠标移入切换(方法二)
    $(".title-list li ").each(function () {
        $(this).mouseover(function () {

            var strTitle = $(this).text();

            // console.log(strTitle);

            if (strTitle == '海贼王'){
                addPic(arrOpImg, arrOpTitle);
            }else if(strTitle == '火影忍者'){
                addPic(arrHyImg, arrHyTitle);
            }else if(strTitle == '柯南'){
                addPic(arrKnImg, arrKnTitle);
            }else if(strTitle == '四驱兄弟'){
                addPic(arrSqImg, arrSqTitle);
            }


        }).mouseout(function () {
                // ???????
        })
    });

    //鼠标点击切换
    $(".title-list li ").each(function () {
        $(this).click(function () {

            $(this).parent().children().removeClass('active2');
            $(this).addClass('active2');

            //把空格清零
            // var strTitle = $.trim($(this).text());


            var strTitle = $(this).text();
            console.log(strTitle);

            if (strTitle == '海贼王'){
                addPic(arrOpImg, arrOpTitle);
            }else if(strTitle == '火影忍者'){
                addPic(arrHyImg, arrHyTitle);
            }else if(strTitle == '柯南'){
                addPic(arrKnImg, arrKnTitle);
            }else if(strTitle == '四驱兄弟'){
                addPic(arrSqImg, arrSqTitle);
            }
        })
    })

});