<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 0:47
 */
class personal extends main{
    public function init(){
        $this->smarty->assign("login",$this->session->getSession("login"));
        $this->smarty->display("index/cy-personal.html");
    }
    public function info(){
        $this->smarty->display("index/cy-info.html");
    }
    public function sex(){
//        $sex=implode(",",$_REQUEST["sex"]);
//        var_dump($sex);
        $this->smarty->display("index/cy-sex.html");
    }
}