<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 16:07
 */
class smarty{
    public $templateDir;
    public $compileDir;
    public $assignArr;
    public function setTemplateDir($dir='template'){
        $this->templateDir=$dir;
        if (!is_dir($dir)){
            mkdir($dir);
        }
    }
    public function setCompileDir($dir='compile'){
        $this->compileDir=$dir;
        if (!is_dir($dir)){
            mkdir($dir);
        }
    }
    public function assign($key,$val){
        $this->assignArr[$key]=$val;
    }
    public function display($file){
        $this->setTemplateDir();
        $this->setCompileDir();
        $content=file_get_contents($this->templateDir."/".$file);
//        echo preg_replace("/\{([\s\S]+)\}/","123",$content);
        $str=preg_replace("/\{([\s\S]+?)\}/",'<?php echo $this->assignArr["$1"]?>',$content);
        $curl=$this->compileDir."/".md5($file).substr($file,0,strrpos($file,'.')).".php";
        file_put_contents($curl,$str);
        include_once $curl;
    }
}