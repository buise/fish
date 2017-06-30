/**
 * Created by Administrator on 2017/6/21.
 */
$(function () {
    $('.left>ul>li>a').click(function () {
        $(this).children("span").toggleClass('tran')
        $(this).next().slideToggle(300);
    })

//    时间
    let time=new Date();
    let yh=time.getFullYear();
    let mh=gettime(time.getMonth()+1);
    let dh=gettime(time.getDate());
    let hh=gettime(time.getHours());
    let mih=gettime(time.getMinutes());
    let sh=gettime(time.getSeconds());
    $('.time').html(`${yh}-${mh}-${dh} ${hh}:${mih}:${sh}`);
    let t=setInterval(function () {
        time=new Date();
        yh=time.getFullYear();
        mh=gettime(time.getMonth()+1);
        dh=gettime(time.getDate());
        hh=gettime(time.getHours());
        mih=gettime(time.getMinutes());
        sh=gettime(time.getSeconds());
        $('.time').html(`${yh}-${mh}-${dh} ${hh}:${mih}:${sh}`);
    },1000);

    function gettime(time) {
        if (time<10){
            return time='0'+time;
        }else {
            return time;
        }
    }
})
