<?php
class index extends main {
    public function init(){
        $this->smarty->display("index/index.html");
    }
}