<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 21:41
 */
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
        $this->smarty->display("index/fh-payment.html");
    }
}