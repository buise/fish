<?php
class payment extends main{
    public function init(){
        if(!$this->session->getSession("login")){
            $url=$_REQUEST['url'];
            $this->session->setSession("url",$url);
            echo "no";
            exit();
        }else{
            echo "yes";
        }
    }
    public function show(){
        $db=new db("lists");
        $lid=$_REQUEST['lid'];
        $db=new db("lists");
        // 根据时间生成订单号
        date_default_timezone_set('Asia/Shanghai');
        $time=time();



        // 更新购物车状态  该商品的订单号
        $db->where("lid=".$lid)->update("cart=1,ordernumber=".$time);

        $this->smarty->assign("lid",$lid);
        $obj=new db("lists");
        $result=$obj->where("cart=1")->select();
        $this->smarty->assign("data",$result);


        $this->smarty->display("index/fh-payment.html");
    }
}