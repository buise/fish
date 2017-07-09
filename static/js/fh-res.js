/**
 * Created by Administrator on 2017/7/3.
 */
$(document).ready(function () {
    $('input[name=name]').blur(function () {
        if ($('input[name=name]').val()){
            $('.fh-yse1').css('display','block');
        }else{
            $('.fh-yse1').css('display','none');
        }
    })

    $('input[name=tel]').blur(function () {
        if ($('input[name=tel]').val()){
            $('.fh-yse').css('display','block');
        }else{
            $('.fh-yse').css('display','none');
        }
    })

    $('.fh-submit').click(function () {
        var name=$('input[name=name]').val();
        var pass=$('input[name=pass]').val();
        var code=$('input[name=yzm]').val();
        if(!code){
            alert('输入验证码')
        }else{
            $.ajax({
                url:"index.php?f=login&a=rescheck",
                type:"post",
                data:{
                    name:name,
                    pass:pass,
                    code:code
                },
                success:function (e) {
                    if(e==2){
                        $('.fh-click').css('display','block');
                        $('.fh-loading').css('display','block');
                        setTimeout(function () {
                            $('.fh-loading').css('display','none');
                            $('.fh-success').css('display','block');
                        },200)
                    }else if (e==1){
                        alert('账号已存在!')
                    }else{
                        alert('验证码输入有误!')
                    }
                }
            })
        }
    })
})
