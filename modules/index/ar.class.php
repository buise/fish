<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 10:37
 */
class ar extends main {
    public function init(){
        $imgurl=$_REQUEST['imgurl'];
        $lid=$_REQUEST['lid'];
        $this->smarty->assign("imgurl",$imgurl);
        $this->smarty->assign("lid",$lid);

        $this->smarty->display("index/cll-ar.html");
    }
}