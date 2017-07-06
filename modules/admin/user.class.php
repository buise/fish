<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 18:12
 */
class user extends main {
    public function __construct(){
        parent::__construct();
        $this->db=new db('user');
    }
//    添加用户
    public function addUser(){
        $this->db->table='role';
        $roles=$this->db->select();
        $this->smarty->assign('roles',$roles);
        $this->smarty->display("admin/addUser.html");
    }
//    添加用户到数据库
    public function addCon(){
        $uname=$_REQUEST['uname'];
        $upass=$_REQUEST['upass'];
        $rid=$_REQUEST['rid'];
        $unick=$_REQUEST['unick'];
        if ($this->db->insert("uname='$uname',upass='$upass',rid='$rid',unick='$unick'")>0){
            $this->alert("添加成功","index.php?m=admin&f=user&a=addUser");
        }
    }
//    查看用户
    public function lookUser(){
        $result=$this->db->select();
        $this->smarty->assign("usermess",$result);
        $this->smarty->display("admin/lookUser.html");
    }
//    删除用户
    public function delUserCon(){
        $uid=$_POST['uid'];
        if($this->db->delete("uid='{$uid}'")){
            echo "ok";
        }
    }
//    呈现编辑用户页面
    public function editUserCon(){
        $uid=$_REQUEST['uid'];
        $this->session->setSession("edituid",$uid);
        $result=$this->db->where("uid={$uid}")->select();
        $db=new db('role');
        $roles=$db->select();
        $this->smarty->assign("umess",$result);
        $this->smarty->assign("roles",$roles);
        $this->smarty->display("admin/editUserCon.html");
    }
//    编辑
    public function editUserConCon(){
        $uname=$_REQUEST['uname'];

        $edituid=$this->session->getSession("edituid");
        if (isset($_REQUEST['upass2'])){
            $arr=$this->db->where("uid='{$edituid}'")->select();
            if ($arr[0]['upass']==$_REQUEST['upass2']){
                if($_REQUEST['upass']!=''){
                    $upass=$_REQUEST['upass'];
                }else{
                    $upass=$_REQUEST['upass2'];
                }
            }else{
                echo "旧密码不正确";
                exit();
            }
        }else{
            echo "密码不能为空";
            exit();
        }
        $rid=$_REQUEST['rid'];
        $unick=isset($_REQUEST['unick'])?$_REQUEST['unick']:'';

        $brr=$this->db->where("uid='{$edituid}'")->select();
        foreach ($brr as $v){
            if ($v['uname']==$uname&&$v['upass']==$upass&&$v['rid']==$rid&&$v['unick']==$unick){
                echo "修改成功";
                exit();
            }
        }

        if($this->db->update("uname='{$uname}',upass='{$upass}',rid='{$rid}',unick='{$unick}' where uid='{$edituid}'")){
            echo "修改成功";
        }
    }

}