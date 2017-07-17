/**
 * Created by Administrator on 2017/7/5.
 */
$(function () {
    var fashion=$(".fashion");
    var con=$(".fashion .con");
    var i=0;
    var k;
    var cona=$(".fashion .con .pos");

    touch.on(fashion,"dragstart",con,function (e) {
        if(e.direction=="left"){
            i++;
            k=5;
        }else if(e.direction=="right"){
            i--;
            k=5
        }

        if(i>=0&&i<5){
            for(var j=i;j<cona.length;j++){
                cona.eq(j).css("z-index",k)
                k--;
            }
        }
    });
})