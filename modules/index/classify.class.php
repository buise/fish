<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 0:38
 */
class classify extends main{
    public function init(){
        $db=new db("lists");
//        灯具
        $light=$db->where("cid=10")->select();
        $this->smarty->assign("light",$light);
//        家饰
        $home=$db->where("cid=11")->select();
        $this->smarty->assign("home",$home);
//        收纳
        $accept=$db->where("cid=12")->select();
        $this->smarty->assign("accept",$accept);
//        时尚生活
        $fashion=$db->where("cid=13")->select();
        $this->smarty->assign("fashion",$fashion);
        $i=1;
        $this->smarty->assign("i",$i);
        $this->smarty->display("index/cll-classify.html");
    }
}