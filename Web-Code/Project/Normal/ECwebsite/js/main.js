window.onload = function () {
    toTip();
    toBanner();
};
//获取class的函数封装
getByclass = function (oParent, sClass) {
    var aEla = oParent.getElementsByTagName('*');
    var arr = [];

    for (var i = 0; i < aEla.length; i++) {
        if (aEla[i].className == sClass) {
            arr.push(aEla[i]);
        }
    }
    return arr;
};
//判断轮播图透明度
getStyle = function(obj,attr){
    if(obj.currentStyle){
        return obj.currentStyle[attr];
    }
    else{
        return getComputedStyle(obj,false)[attr];
    }
};

// 搜索栏判断鼠标移入移出
textChange = function (obj, str) {
    obj.onfocus = function () {
        if (this.value == str) {
            this.value = '';
        }
    };
    obj.onblur = function () {
        if (this.value == '') {
            this.value = str;
        }
    }
};

toTip = function () {
    var otext1 = document.getElementById('text1');
    var otext2 = document.getElementById('text2');

    textChange(otext1, 'Search website');
    textChange(otext2, 'Search website');

};
// 搜索栏判断鼠标移入移出结束

//轮播图淡入淡出自动播放
fadeIn = function (obj) {

    var iCur = getStyle(obj,'opacity');
    if(iCur==1){ return false; }

    var value = 0;
    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        var ispeed = 5;
        if (value == 100) {
            clearInterval(obj.timer);
        } else {
            value += ispeed;
            obj.style.opacity = value / 100;
            obj.style.filter = 'alpha(opacity= ' + value + ')';
        }
    }, 30)

};
fadeOut = function (obj) {

    var iCur = getStyle(obj,'opacity');
    if(iCur==0){ return false; }

    var value = 100;
    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        var ispeed = -5;
        if (value == 0) {
            clearInterval(obj.timer);
        } else {
            value += ispeed;
            obj.style.opacity = value / 100;
            obj.style.filter = 'alpha(opacity= ' + value + ')';
        }
    }, 30)
};

toBanner = function () {
    var oDd = document.getElementById('ad');
    var oLi = oDd.getElementsByTagName('li');

    var oPrevBg = getByclass(oDd, 'prev_bg')[0];
    var oNextBg = getByclass(oDd, 'next_bg')[0];

    var oPrev = getByclass(oDd, 'prev')[0];
    var oNext = getByclass(oDd, 'next')[0];

    var iNow = 0;

    var timer = setInterval(auto, 3000);

    function auto() {
        if (iNow == oLi.length - 1) {
            iNow = 0;
        } else {
            iNow++;
        }

        for (var i = 0; i < oLi.length; i++) {
            fadeOut(oLi[i]);
        }
        fadeIn(oLi[iNow]);
    }

    function autoPrev() {
        if (iNow == 0) {
            iNow = oLi.length-1;
        } else {
            iNow--;
        }

        for (var i = 0; i < oLi.length; i++) {
            fadeOut(oLi[i]);
        }
        fadeIn(oLi[iNow]);
    }

    oPrevBg.onmouseover = oPrev.onmouseover = function () {
        oPrev.style.display = 'block';
        clearInterval(timer);
    };
    oNextBg.onmouseover = oNext.onmouseover = function () {
        oNext.style.display = 'block';
        clearInterval(timer);
    };
    oPrevBg.onmouseout = oPrev.onmouseout = function () {
        oPrev.style.display = 'none';
        timer = setInterval(auto, 3000);
    };
    oNextBg.onmouseout = oNext.onmouseout = function () {
        oNext.style.display = 'none';
        timer = setInterval(auto, 3000);
    };

    oPrev.onclick = function () {
        autoPrev();
    };

    oNext.onclick = function () {
        auto();
    };

};

//轮播图淡入淡出自动播放结束
