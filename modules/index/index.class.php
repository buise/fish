<?php
class index extends main {
    public function init(){
        $this->smarty->display("index/index.html");
    }

    public function sp(){
        $this->smarty->display("index/fh-shanping.html");
    }
}