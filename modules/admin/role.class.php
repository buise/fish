<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 23:03
 */
class role extends main {
    public function addRole(){
        $this->smarty->display("admin/addRole.html");
    }
    public function addCon(){
        $rname=$_REQUEST['rname'];
        $db=new db('role');
        if ($db->insert("rname='$rname'")>0){
            $this->alert("添加成功","index.php?m=admin&f=role&a=addRole");
        }
    }
}