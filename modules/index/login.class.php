<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/3
 * Time: 15:54
 */
class login extends main{
    public function init(){
        if($this->session->getSession("login")){
            echo "<script>location.href='index.php'</script>";
            exit();
        }
        if($this->session->getSession("url")){
            $this->smarty->assign("url",$this->session->getSession("url"));
        }else{
            $this->smarty->assign("url","index.php");
        }
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
                $this->session->setSession("name",$name);
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

    public function rescheck(){
        $codesj=$this->session->getSession("code");
        $name=$_REQUEST['name'];
        $pass=$_REQUEST['pass'];
        $code=$_REQUEST['code'];
        if($codesj==$code){
            $db=new db("person");
            $result=$db->insert("name='{$name}',pass='{$pass}'");
            if($result){
                echo 2;
            }else{
                echo 1;
            }
        }else{
            echo 0;
        }
    }

    public function tel(){
        require_once('Ucpaas.class.php');

//初始化必填
        $options['accountsid']='72d13c67c20b2bd0a144a2e18f732bdc';
        $options['token']='8857007155083cde5e3a470f34b83390';


//初始化 $options必填
        $ucpass = new Ucpaas($options);

//随机数
        $str="1234567890qwertyuioplkjhgfdsazxcvbnm"; //36
        $sj='';
        for ($j=0;$j<6;$j++){
            $i=mt_rand(0,35);
            $sj.=substr($str,$i,1);
        }

        $this->session->setSession("code",$sj);

//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "4baf1c3e39874fc4b9485321c0a6f374";
        $to = $_POST['to'];
        $templateId = "91878";
        $param=$sj;

        $arr=$ucpass->templateSMS($appId,$to,$templateId,$param);
        if (substr($arr,21,6) == 000000) {
            //如果成功就，这里只是测试样式，可根据自己的需求进行调节
            echo "短信验证码已发送成功，请注意查收短信";

        }else {
            //如果不成功
            echo "短信验证码发送失败，请联系客服";
        }

    }
}