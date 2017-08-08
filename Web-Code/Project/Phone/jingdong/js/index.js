window.onload = function () {
    search();
    countdown();
    banner();
};

var search = function () {
    var search = document.getElementsByClassName('jd_header_box')[0];
    var banner = document.getElementsByClassName('jd_banner')[0];
    var height = banner.offsetHeight;
    window.onscroll = function () {
        var top = document.body.scrollTop;
        if (top > height) {
            search.style.background = "rgba(201, 21, 35, .85)";
        } else {
            var op = top / height * .85;
            search.style.background = "rgba(201, 21, 35, " + op + ")";
        }
    }
};

var countdown = function () {
    var countdown = document.getElementsByClassName("ms_time")[0];
    var timeList = countdown.getElementsByClassName("time_bk");
    var times = 26 * 60 * 60;
    var timer;
    timer = setInterval(function () {
        times--;
        var h = Math.floor(times / (60 * 60));
        var m = Math.floor(times / 60 % 60);
        var s = times % 60;

        timeList[0].innerHTML = h > 10 ? Math.floor(h / 10) : 0;
        timeList[1].innerHTML = h % 10;

        timeList[2].innerHTML = m > 10 ? Math.floor(m / 10) : 0;
        timeList[3].innerHTML = m % 10;

        timeList[4].innerHTML = s > 10 ? Math.floor(s / 10) : 0;
        timeList[5].innerHTML = s % 10;
        if (times <= 0) {
            clearInterval(timer);
        }
    }, 1000)
};

function banner() {
    var width = document.body.offsetWidth;
    var bannerImg = document.querySelector('.banner-images');
    var dotArr = document.querySelectorAll('.banner-index li');

    var index = 1;

    var timer = setInterval(function () {

        index++;

        bannerImg.style.transition = 'all .3s';
        bannerImg.style.transform = 'translateX(' + index * -width + 'px)'


    }, 1500);

    bannerImg.addEventListener('webkitTransitionEnd', function () {

        if (index > 8) {
            index = 1;

            bannerImg.style.transition = '';
            bannerImg.style.transform = 'translateX(' + index * -width + 'px)'

        } else if (index < 1) {
            index = 8;
            bannerImg.style.transition = '';
            bannerImg.style.transform = 'translateX(' + index * -width + 'px)'
        }


        for (var i = 0; i < dotArr.length; i++) {
            dotArr[i].className = ''
        }
        dotArr[index - 1].className = 'current'

    });

    var startX = 0;
    var moveX = 0;

    bannerImg.addEventListener('touchstart', function (event) {

        clearInterval(timer);
        bannerImg.style.transition = '';

        startX = event.touches[0].clientX;

    });
    bannerImg.addEventListener('touchmove', function (event) {

        moveX = event.touches[0].clientX - startX;

        bannerImg.style.transform = 'translateX(' + (moveX + index * -width) + 'px)';

    });
    bannerImg.addEventListener('touchend', function () {

        var maxDistance = width / 3;

        if (Math.abs(moveX) > maxDistance) {

            if (moveX > 0) {
                index--
            } else {
                index++
            }

            bannerImg.style.transition = 'all .3s';
            bannerImg.style.transform = 'translateX(' + index * -width + 'px)'
        } else {

            bannerImg.style.transition = 'all .3s';
            bannerImg.style.transform = 'translateX(' + index * -width + 'px)'
        }

        timer = setInterval(function () {

            index++;

            bannerImg.style.transition = 'all .3s';
            bannerImg.style.transform = 'translateX(' + index * -width + 'px)'


        }, 1500);
    });
}




























