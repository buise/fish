<?php
class personal extends main{
    public function init(){

        $this->smarty->assign("login",$this->session->getSession("login"));
        $this->smarty->assign("lid",$this->session->getSession("lid"));
        $this->smarty->display("index/cy-personal.html");
    }
    public function info(){
        $this->smarty->display("index/cy-info.html");
    }
    public function sex(){
        $db=new db("person");
        $name=$this->session->getSession("name");

        $result=$db->setField("sex")->where("name='{$name}'")->select();
        $this->smarty->assign("sex",$result[0]['sex']);

        $this->smarty->display("index/cy-sex.html");
    }
    public function sexcheck(){

        $sex=$_REQUEST["value"];
        $name=$this->session->getSession("name");
        $db=new db("person");
        $result=$db->where("name='{$name}'")->update("sex='{$sex}'");

        if($result){
            echo "ok";
        }else{
            echo "no";
        }


    }
}