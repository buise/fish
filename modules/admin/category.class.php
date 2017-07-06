<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/29
 * Time: 0:26
 */
class category extends main{
    public function __construct(){
        parent::__construct();
        $this->db=new db('category');
    }

    public function addCategory(){
        $tree=new tree();
        $tree->getTree(0,1,'--',$this->db->db,'category');
//        var_dump($tree->str);
        $this->smarty->assign("option",$tree->str);
        $this->smarty->display("admin/addCategory.html");
    }
    public function addCon(){
        $pid=$_REQUEST['pid'];
        $cname=$_REQUEST['cname'];
        if($this->db->insert("pid=$pid,cname='$cname'")){
            $this->alert("添加成功","index.php?m=admin&f=category&a=addCategory");
        }
    }
}