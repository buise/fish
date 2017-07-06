/**
 * Created by Administrator on 2017/7/5.
 */
$(function () {
    var getCss = function(o,key){
        return o.currentStyle? o.currentStyle[key] : document.defaultView.getComputedStyle(o,false)[key];
    };

    function drag(element){
        element.style.top = getCss(element,"top");
        element.style.left = getCss(element,"left");
        var hammer = new Hammer(element);//hammer实例
        var x = 0;
        var y = 0;
        hammer.on('panstart',function(event){
            x = parseInt(element.style.left);
            y = parseInt(element.style.top);
        });
        hammer.on('panmove',function(event){
            element.style.top = y + event.deltaY + "px";
            element.style.left = x + event.deltaX + "px";
        });
        hammer.on('panend',function(event){

        });

    }
    var myElement = document.getElementById("move-box");
    drag(myElement);

    // 返回
    $("#header a").click(function () {
        window.history.go(-1)
    })



})