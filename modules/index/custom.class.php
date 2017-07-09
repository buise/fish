<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 0:47
 */
class custom extends main{
    public function init(){
        $db=new db("lists");
//        灯具
        $light=$db->where("cid=14")->select();
        $this->smarty->assign("light",$light);
//        家饰
        $home=$db->where("cid=15")->select();
        $this->smarty->assign("home",$home);
//        沙发
        $sofa=$db->where("cid=19")->select();
        $this->smarty->assign("sofa",$sofa);
//        床
        $bed=$db->where("cid=20")->select();
        $this->smarty->assign("bed",$bed);

//        茶几
        $tea=$db->where("cid=21")->select();
        $this->smarty->assign("tea",$tea);

        $this->smarty->display("index/cll-custom.html");
    }
}