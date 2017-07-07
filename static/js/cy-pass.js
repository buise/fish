$().ready(function(){
    var aa=$("input[type='password']");

    for(var i = 0; i<aa.length;i++){
        var t = aa[i];
        t.index = i;
        t.setAttribute("readonly", true);
        t.onkeyup=function(){
            this.value=this.value.replace(/^(.).*$/,'$1');
            var next = this.index + 1;
            if(next > aa.length - 1) return;
            aa[next].removeAttribute("readonly");
            aa[next].focus();
        }
    }
    aa[0].removeAttribute("readonly");


    $("[type='password']").each(function (index,val) {
        $(val).change(function () {
            if ( $(val).val()!=""){
                document.querySelector(".button").href="cy-red.html"
            }
        })
    })
})