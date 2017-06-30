<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 16:19
 */
class route{
    static $m;
    static $f;
    static $a;
    public function getInfo(){
        self::$m=isset($_REQUEST['m'])&&!empty($_REQUEST['m'])?$_REQUEST['m']:"index";
        self::$f=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:"index";
        self::$a=isset($_REQUEST['a'])&&!empty($_REQUEST['a'])?$_REQUEST['a']:"init";
        $this->openPath();
    }
    private function openPath(){
        $dir=MODULES_PATH.self::$m;
        if(is_dir($dir)){
            $file=$dir."/".self::$f.".class.php";
            if (is_file($file)){
                include_once $file;
                if(class_exists(self::$f,$file)){
                    $obj=new self::$f();
                    if(method_exists($obj,self::$a)){
                        $method=self::$a;
                        $obj->$method();
                    }else{
                        echo self::$a."方法不存在";
                    }
                }else{
                    echo self::$f."类不存在";
                }
            }else{
                echo $file."文件不存在";
            }
        }else{
            echo $dir."文件夹不存在";
        }
    }
}