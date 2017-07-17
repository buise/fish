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
        $cid=$_REQUEST['cid'];
        $cname=$_REQUEST['cname'];
        $ename=$_REQUEST['ename'];
        $keywords=isset($_REQUEST['keywords'])?$_REQUEST['keywords']:"";
        $price=$_REQUEST['price'];
        $amount=$_REQUEST['amount'];
//        $color=$_REQUEST['color'];
        $content=isset($_REQUEST['content'])?$_REQUEST['content']:'';
        $imgurl=$_REQUEST['imgurl'];
        $posid=isset($_REQUEST['posid'])?implode(";",$_REQUEST['posid']):"";
        $intro=$_REQUEST['intro'];
        $db=new db("lists");
        if($db->insert("cid={$cid},cname='{$cname}',ename='{$ename}',keywords='{$keywords}',price='{$price}',amount='{$amount}',content='{$content}',imgurl='{$imgurl}',posid='{$posid}',intro='{$intro}'")){
            $this->alert("添加成功","index.php?m=admin&f=content&a=addContent");
        }





    }



//    图片上传
    public function upload(){
        $fileobj=new uploadfile();
        $fileobj->url="upload";
        $fileobj->upload();
    }










}