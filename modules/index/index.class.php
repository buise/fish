<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 0:41
 */
class index extends main {
    public function init(){
        $this->smarty->display("index/index.html");
    }
}