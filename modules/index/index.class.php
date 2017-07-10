<?php
class index extends main {
    public function init(){
        
        $db=new db("lists");
//        限时抢购
        $sale=$db->where("cid=23")->select();
        $this->smarty->assign("sale",$sale);
//        免费设计
        $design=$db->where("cid=24")->select();
        $this->smarty->assign("design",$design);
//        最近设计
        $devise=$db->where("cid=25")->select();
        $this->smarty->assign("devise",$devise);
//        猜你喜欢
        $like=$db->where("cid=26")->select();
        $this->smarty->assign("like",$like);
        
        $this->smarty->display("index/index.html");
    }

    public function sp(){
        $this->smarty->display("index/fh-shanping.html");
    }
}