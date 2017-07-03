/**
 * Created by Administrator on 2017/7/3.
 */
$(function () {
    $(".count .jia").click(function () {
        var price=$(".thumb .three h").html();
        $(".count .left span").html(parseInt($(".count .left span").html())+1)
        $(".count .right span").html(parseInt($(".count .left span").html())*parseInt(price))
    })
    $(".count .jie").click(function () {
        var price=$(".thumb .three h").html();
        $(".count .left span").html(parseInt($(".count .left span").html())-1>-1?parseInt($(".count .left span").html())-1:0)
        $(".count .right span").html(parseInt($(".count .right span").html())-parseInt(price))
    })
})