<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/29
 * Time: 0:26
 */
class content extends main {
    public function __construct(){
        parent::__construct();
        $this->db=new db("lists");
    }

//    添加内容
    public function addContent(){
        $db=new db("position");
        $tree=new tree();
        $pos=$db->select();
        $tree->getTree(0,1,'--',$db->db,'category');
        $str=$tree->str;
        $this->smarty->assign("option",$str);
        $this->smarty->assign("position",$pos);
        $this->smarty->display("admin/addContent.html");
    }

//    内容提交后台
    public function addContentCon(){






    }



//    图片上传
    public function upload(){
        $fileobj=new uploadfile();
        $fileobj->url="upload";
        $fileobj->upload();
    }











}