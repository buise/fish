<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4
 * Time: 9:22
 */
class order extends main {
    public function payment(){
        $this->smarty->display('index/fh-payment.html');
    }

    public function send(){
        $this->smarty->display('index/fh-send.html');
    }
}