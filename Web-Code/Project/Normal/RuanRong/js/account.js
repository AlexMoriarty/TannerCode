/**
 * Created by LX on 2017/7/11.
 */
window.onload = function () {
    var oCloseBtn = document.getElementById('close_box');
    var oChangeBox = document.getElementById('change_box');
    var oShade = document.getElementById('bg_shade');

    oCloseBtn.onclick = function () {
        oChangeBox.style.display = 'none';
        oShade.style.display = 'none';
    }
};