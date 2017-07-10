$(function () {

    var sex=$("ul").attr("sex");
    $("input[type=radio]").each(function (index,value) {
        $(value).parent(".slideThree").removeClass("xuanze").end().removeAttr("checked")


        if($(value).val()==sex){

            $(value).attr("checked","checked");
            $(value).parent(".slideThree").addClass("xuanze")
               $(value).next("label").addClass("left")
        }
    })

    $(".slideThree >label").each(function (index,val) {

        $(val).click(function () {
            $(".slideThree >label").each(function (index,val) {
                $(val).removeClass('left')
            })

            if($(val).css('left')>='-1.6px'){

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