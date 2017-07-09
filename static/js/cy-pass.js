$(function () {
    // var pay_con = document.querySelector('.pay_con');
    // var activeIndex = 0;
    // var passWord = [];
    // toNext(0);
    // pay_con.addEventListener('touchstart',function(e) {
    //     if (e.target.className.toLowerCase() == 'pay_input') {
    //         e.preventDefault();
    //         if (activeIndex < 6 && e.keyCode != 8) {
    //             var k = String.fromCharCode(e.charCode);
    //             if (/\d/.test(k)) {
    //                 $("#"+e.target.id).val(1);
    //                 passWord.push(k);
    //                 if (activeIndex != 6 - 1) {
    //                     toNext(activeIndex + 1);
    //                 }
    //                 activeIndex++;
    //             } else {
    //             }
    //         }
    //         if (activeIndex == 6) {
    //             if(passWord[5].value!=""){
    //                 // console.log(document.querySelector(".button"))
    //                 document.querySelector(".button").href="cy-red.html"
    //             }
    //
    //         }
    //     }
    // },false);
    // pay_con.addEventListener('change',function(e) {
    //     var e = e || window.event;
    //     if (e.keyCode == 8) {
    //         if (activeIndex > 0) {
    //             activeIndex--;
    //             reback(activeIndex);
    //             passWord.pop();
    //         }
    //     }
    // },false);
    // function toNext(index) {
    //     var key = index + 1;
    //     $("#pay_input_" + key).focus();
    // }
    // function reback(index) {
    //     var key = index + 1;
    //     $("#pay_input_" + key).val('');
    //     $("#pay_input_" + key).focus();
    // }
    //
    // var aa=$("input[type='password']");
    // aa.each(function (index,val) {
    //     val.setAttribute("readonly", "readonly");
    //
    // })
    // aa[0].removeAttribute("readonly");

    $(".ipt-real-nick").on("input", function() {
        //console.log($(this).val());
        var $input = $(".ipt-fake-box input");
        if(!$(this).val()){//无值光标顶置
            $('.ipt-active-nick').css('left',$input.eq(0).offset().left-parseInt($('.ipt-box-nick').parent().css('padding-left'))+'px');
        }
        if(/^[0-9]*$/g.test($(this).val())){//有值只能是数字
            //console.log($(this).val());
            var pwd = $(this).val().trim();
            for (var i = 0, len = pwd.length; i < len; i++) {
                $input.eq(i).val(pwd[i]);
                if($input.eq(i).next().length){//模拟光标，先将图片容器定位，控制left值而已
                    $('.ipt-active-nick').css('left',$input.eq(i+1).offset().left-parseInt($('.ipt-box-nick').parent().css('padding-left'))+'px');
                }
            }
            $input.each(function() {//将有值的当前input后的所有input清空
                var index = $(this).index();
                if (index >= len) {
                    $(this).val("");
                }
            });
            if (len == 6) {
                //执行其他操作
                // console.log('输入完整，执行操作');
                var button=document.querySelector(".button")
                button.href="cy-red.html"

            }
        }else{//清除val中的非数字，返回纯number的value
            var arr=$(this).val().match(/\d/g);
            $(this).val($(this).val().slice(0,$(this).val().lastIndexOf(arr[arr.length-1])+1));
            //console.log($(this).val());
        }
    });
})