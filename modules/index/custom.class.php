<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 0:47
 */
class custom extends main{
    public function init(){
        $this->smarty->display("index/cll-custom.html");
    }
}