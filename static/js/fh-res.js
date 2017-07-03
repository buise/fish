/**
 * Created by Administrator on 2017/7/3.
 */
$(document).ready(function () {
    $('input[name=name]').blur(function () {
        if ($('input[name=name]').val()){
            $('<img src="../../static/img/fh-11.png" class="fh-yse">').appendTo('.fh-ts');
            $('.fh-ts2').css('display','none');
        }else{
            $('.fh-yse').css('display','none');
            $('.fh-ts2').css('display','block');
        }
    })

    $('input[name=tel]').blur(function () {
        if ($('input[name=tel]').val()){
            $('<img src="../../static/img/fh-11.png" class="fh-yse">').appendTo('.fh-ts3');
        }else{
            $('.fh-yse').css('display','none');
        }
    })

    $('.fh-submit').click(function () {
        $('.fh-click').css('display','block');
        $('.fh-loading').css('display','block');
        setTimeout(function () {
            $('.fh-loading').css('display','none');
            $('.fh-success').css('display','block');
        },200)
    })
})
