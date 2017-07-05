/**
 * Created by Administrator on 2017/7/3.
 */
$(document).ready(function () {
    var flag=false;
    var flag1=false;
    $('input[type=text]').blur(function () {
        if ($('input[type=text]').val()){
            flag=true;
            $('.fh-yes').css('display','block');
            // $('.fh-ts2').css('display','none');
        }else{
            $('.fh-yes').css('display','none');
            // $('.fh-ts2').css('display','block');
        }
    })

    $('input[type=password]').blur(function () {
        if ($('input[type=password]').val()){
            flag1=true;
        }
    })

    $('.fh-submit').click(function () {
        if(flag&&flag1){
            var name=$('input[name=name]').val();
            var pass=$('input[name=pass]').val();
            $.ajax({
                url:"index.php?d=index&f=login&a=check",
                type:'post',
                data:{
                    name:name,
                    pass:pass
                },
                success:function (text) {
                    if (text=='ok'){
                        $('.fh-click').css('display','block');
                        $('.fh-loading').css('display','block');
                        setTimeout(function () {
                            $('.fh-loading').css('display','none');
                            $('.fh-success').css('display','block');
                        },200)
                    }else{
                        $('.fh-click').css('display','block');
                        $('.fh-loading').css('display','block');
                        setTimeout(function () {
                            $('.fh-loading').css('display','none');
                            $('.fh-fail').css('display','block');
                        },200)
                    }
                }
            })
        }
        // $('.fh-click').css('display','block');
        // $('.fh-loading').css('display','block');
        // setTimeout(function () {
        //     $('.fh-loading').css('display','none');
        //     $('.fh-success').css('display','block');
        // },200)
    })
})