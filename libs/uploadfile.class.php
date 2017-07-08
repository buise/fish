<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5
 * Time: 21:40
 */
class uploadfile{
    public $str="file";
    public $file="";
    public $url="upload";
    public $fullpath="";
//    上传文件类型 初始值
    public $type=array(
        "image/png",
        "image/jpeg",
        "image/gif"
    );
//    上传文件大小 初始值
    public $size=2000000;
//    构造函数
    public function __construct(){
        $this->size=1024*1024*7;
    }
//    获取文件
    private function getFile($str){
        $this->file=$_FILES[$str];
    }
//    检查
    private function check(){
        //        判断是否是上传上来的文件
        if (is_uploaded_file($this->file["tmp_name"])) {
            //        上传的大小 类型格式 是否匹配
            if (in_array($this->file["type"], $this->type)&&$this->file["size"] < $this->size) {
                return true;
            }
        }
        return false;
    }
//    定义路径
    private function definedUrl(){
        if (!is_dir($this->url)){
            mkdir($this->url);
        }
        $path=$this->url."/".date("y-m-d");
        if (!is_dir($path)){
            mkdir($path);
        }
        $name=md5(time().mt_rand(0,1000)).$this->file["name"];
        $this->fullpath=$path."/".$name;
    }
//    上传
    private function moveFile(){
        // 存入
        move_uploaded_file($this->file["tmp_name"],$this->fullpath);
    }
//    接口
    public function upload(){
        $this->getFile($this->str);
        if ($this->check()){
            $this->definedUrl();
            $this->moveFile();
            echo $this->fullpath;
        }
    }
}
?>