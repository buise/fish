/**
 * Created by Administrator on 2017/7/3.
 */
$(function () {
    $(".count .jia").click(function () {
        var price=$(".thumb .three h").html();
        var amount=parseInt($(".thumb").attr("amount"));
        if(parseInt($(".count .left span").html())>=amount){
            $(".count .left span").html(amount-1)
        }
        $(".count .left span").html(parseInt($(".count .left span").html())+1)

        $(".count .right span").html(parseInt($(".count .left span").html())*parseInt(price))
    })
    $(".count .jie").click(function () {
        var price=$(".thumb .three h").html();
        $(".count .left span").html(parseInt($(".count .left span").html())-1>-1?parseInt($(".count .left span").html())-1:0)
        $(".count .right span").html(parseInt($(".count .right span").html())-parseInt(price))
    })


    // 购买
    $(".pay").click(function () {
        $.ajax({
            url:"index.php?m=index&f=pay",
            data:{
                url:location.href,
            },
            type:"POST",
            success:function (e) {
                if(e=='no'){
                    location.href="index.php?m=index&f=login"
                }else if(e=='yes'){
                    location.href="index.php?m=index&f=pay&a=show"
                }
            }
        })

    })
    // 加入购物车
    $(".payment").click(function () {
        var value=$("input[type=hidden]").val();
        $.ajax({
            url:"index.php?m=index&f=payment",
            data:{
                url:location.href,
            },
            type:"POST",
            success:function (e) {
                if(e=='no'){
                    location.href="index.php?m=index&f=login"
                }else if(e=='yes'){
                    location.href="index.php?m=index&f=payment&a=show&lid="+value

                }
            }
        })
    })



})