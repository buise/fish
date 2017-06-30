<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 9:42
 */
class main{
    function __construct(){
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");
        $smarty->setTemplateDir("template");
        $this->smarty=$smarty;
        $this->session=new session();
    }
    public function alert($mess,$url=''){
        if ($url==''){
            echo "<script>alert('{$mess}')</script>";
        }else{
            echo "<script>alert('{$mess}');location.href='{$url}'</script>";
        }
    }
}