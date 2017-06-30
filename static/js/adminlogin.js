/**
 * Created by Administrator on 2017/6/27.
 */
$(function () {
    $(".text input").focus(function () {
        $(this).prev("span").addClass("top")
    }).blur(function () {
        if($(this).val()){
            $(this).prev("span").html("");
        }else {
            $(this).prev("span").removeClass("top")
        }
    })

    $(".text input").each(function (index,value) {
        if($(this).val()){
            $(this).prev("span").html("");
        }
    })
})