$(function () {

    $(".slideThree >label").each(function (index,val) {

        if($(val).css('left')=='-1.6px'){
            $(this).parent('.slideThree').removeClass("xuanze")
        }
        if($(val).css('left')=='8.48px'){
            $(this).parent('.slideThree').addClass("xuanze")
        }
        $(val).click(function () {
            if($(val).css('left')=='-5px'){
                $('.slideThree').each(function (index,val) {
                    $(val).removeClass("xuanze")
                })
                $(this).parent('.slideThree').addClass("xuanze")

            }

        })
    })

    $(".return").click(function () {
        history.go(-1);
    })

})