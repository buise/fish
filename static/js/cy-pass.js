/**
 * Created by Administrator on 2017/7/3.
 */
window.onload=function(){
    var pay_con = document.querySelector('.pay_con');

    var activeIndex = 0;
    var passWord = [];
    toNext(0);
    pay_con.addEventListener('keypress',function(e) {
        if (e.target.className.toLowerCase() == 'pay_input') {
            e.preventDefault();
            if (activeIndex < 6 && e.keyCode != 8) {
                var k = String.fromCharCode(e.charCode);
                if (/\d/.test(k)) {
                    $("#"+e.target.id).val(1);
                    passWord.push(k);
                    if (activeIndex != 6 - 1) {
                        toNext(activeIndex + 1);
                    }
                    activeIndex++;
                } else {
                }
            }
            if (activeIndex == 6) {
                // alert(passWord);
            }
        }
    },false);
    pay_con.addEventListener('keyup',function(e) {
        var e = e || window.event;
        if (e.keyCode == 8) {
            if (activeIndex > 0) {
                activeIndex--;
                reback(activeIndex);
                passWord.pop();
            }
        }
    },false);
    function toNext(index) {
        var key = index + 1;
        $("#pay_input_" + key).focus();
    }
    function reback(index) {
        var key = index + 1;
        $("#pay_input_" + key).val('');
        $("#pay_input_" + key).focus();
    }
};