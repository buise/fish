<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3
 * Time: 15:54
 */
class login extends main{
    public function init(){
        $this->smarty->display('index/fh-login.html');
    }

    public function check(){
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $db=new db('person');
        $result=$db->where("name='{$name}'")->select();
        if($result){
            if($result[0]['pass']==$pass){
                $this->session->setSession("login","yes");
                echo 'ok';
            }else{
                echo 'no';
            }
        }else{
            echo 'no';
        }
    }

    public function res(){
        $this->smarty->display('index/fh-res.html');
    }
}