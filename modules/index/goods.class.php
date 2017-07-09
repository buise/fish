<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 11:13
 */
class goods extends main {
//    商品详情页
    public function init(){
        $lid=$_REQUEST['lid'];
        $db=new db("lists");
        $mess=$db->where("lid={$lid}")->select();
        $this->smarty->assign("mess",$mess);
        $this->smarty->display("index/cll-goods.html");
    }






}