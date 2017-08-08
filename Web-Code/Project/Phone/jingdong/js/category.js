/**
 * Created by alex on 2017/5/14.
 */

window.onload = function () {
      leftCategory()
};
var leftCategory = function () {
    // 父盒子
    var parentBox = document.getElementsByClassName('jd_category_left')[0];
    // 父盒子
    var childBox = parentBox.getElementsByClassName('jd_category_left_box')[0];

    var childBoxLiList = childBox.getElementsByTagName('li');

    var height = parentBox.offsetHeight;

    var topHeight = document.getElementsByClassName('jd_topBar')[0].offsetHeight;

    // 想要的
    var parentH = height - topHeight;

    var childH = childBox.offsetHeight;



    var startY = 0;
    var endY = 0;
    var moveY = 0;

    var currY = 0;
    // 晃动的范围
    var upDownY = 150;

    // 时间
    var startTime = 0,endTime = 0;


    // 加过渡
    var addTranstion = function () {
        childBox.style.transition = 'all .3s ease 0s';
        childBox.style.webkitTransition = 'all .3s ease 0s';
    };
    // 减过度
    var removeTransition = function () {
        childBox.style.transition = "none";
        childBox.style.webkitTransition = "none";
    };
    // 改变位置
    var setTransform = function (t) {
        childBox.style.transform = 'translateY('+t+'px)';
        childBox.style.webkitTransform = 'translateY('+t+'px)';
    };


    childBox.addEventListener('touchmove',function (e) {

        startTime = new Date().getTime();
        startY = e.touches[0].clientY;
    },false);
    childBox.addEventListener('touchmove',function (e) {
        e.preventDefault();

        endY = e.touches[0].clientY;
        moveY = startY - endY;


        // 上下的间距不大于upDown
        if (currY - moveY < upDownY && currY - moveY > (-(childH - parentH) - upDownY)){
            removeTransition();
            setTransform(currY - moveY);
        }

    },false);
    childBox.addEventListener('touchend',function (e) {

        endTime = new Date().getTime();


        // 当前的滑动位置
        // 上面满足吸附的条件
        if ((currY - moveY) >= 0 ) {
            addTranstion();
            setTransform(0);
            currY = 0;
        }
        // 下面满足吸附的条件
        else if ((currY - moveY) <= (-(childH - parentH) )){
            addTranstion();
            setTransform(-(childH - parentH));
            currY = -(childH - parentH);
        }
        // 正常情况
        else {
            currY = currY - moveY;
        }

        if (endTime-startTime < 150 && moveY == 0){
            for (var i=0 ; i<childBoxLiList.length ; i++){
                childBoxLiList[i].className = " ";
                childBoxLiList[i].index = i;
            }
            var li = e.target.parentNode;
            li.className = 'now';
            // 移动的距离
            var translateY = li.index*50;

            if (currY - translateY < -(childH - parentH) ) {
                addTranstion();
                setTransform(- translateY);
                currY =  - translateY;
            }else {
                addTranstion();
                setTransform(-(childH - parentH));
                currY =  -(childH - parentH);
            }
        }
    },false);

};