$(function () {
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
                if(passWord[5].value!=""){
                    // console.log(document.querySelector(".button"))
                    document.querySelector(".button").href="cy-red.html"
                }

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

    var aa=$("input[type='password']");
    aa.each(function (index,val) {
        val.setAttribute("readonly", "readonly");

    })
    aa[0].removeAttribute("readonly");



})


// $().ready(function(){
//     var aa=$("input[type='password']");
//
//     for(var i = 0; i<aa.length;i++){
//         var t = aa[i];
//         t.index = i;
//         t.setAttribute("readonly", true);
//         t.onkeyup=function(){
//             this.value=this.value.replace(/^(.).*$/,'$1');
//             var next = this.index + 1;
//             if(next > aa.length - 1) return;
//             aa[next].removeAttribute("readonly");
//             aa[next].focus();
//         }
//     }
//     aa[0].removeAttribute("readonly");
// })