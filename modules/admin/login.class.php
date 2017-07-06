<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 10:56
 */
class login extends main {
    function init(){
        if ($this->session->isSeSet("login")){
            $this->alert("已登录","index.php?m=admin&f=login&a=main");
        }else{
            $this->smarty->display("admin/login.html");
        }
    }
    function code(){
        $img=new img();
        $img->codeUrl='./ARCENA.ttf';
        $img->putImg();
        $this->session->setSession("code",$img->str);
    }
    public function check(){
        $code=$_REQUEST['code'];
        if (strtolower($code)!=strtolower($this->session->getSession("code"))){
            $this->alert("验证码错误","index.php?m=admin&f=login");
        }
        $db=new db("user");
        $result=$db->select();
        $uname=$_REQUEST['user'];
        $upass=$_REQUEST['pass'];
        foreach ($result as $value){
            if ($value['uname']==$uname&&$value['upass']==$upass){
                $this->session->setSession('login','yes');
                $this->session->setSession("uname",$uname);
                $this->session->setSession("upass",$upass);
                $this->session->setSession("uid",$value['uid']);
                $this->alert("登录成功","index.php?m=admin&f=login&a=main");
                exit();
            }
        }
        $this->alert("登录失败","index.php?m=admin&f=login");
    }
    public function main(){
        if ($this->session->isSeSet("login")){
            $this->smarty->assign("uname",$_SESSION['uname']);
            $this->smarty->display("admin/main.html");
        }else{
            $this->alert("请登录","index.php?m=admin&f=login");
        }
    }
    public function logout(){
        $this->session->clear();
        $this->alert("退出成功","index.php?m=admin&f=login");
    }
}