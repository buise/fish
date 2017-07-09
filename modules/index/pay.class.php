<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 11:37
 */
class pay extends main{
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
        $this->smarty->display("index/cy-pay.html");
    }
    public function have(){
        $this->smarty->display("index/cy-have.html");
    }
    public function pass(){
        $this->smarty->display("index/cy-pass.html");
    }
    public function red(){
        $this->smarty->display("index/cy-red.html");
    }
    public function add(){
        $this->smarty->display("index/cy-add.html");
    }
}