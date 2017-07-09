<?php
	class search extends main{
		public function init(){
	        $this->smarty->display('index/H-search.html');
	    }
        public function loading(){
            $this->smarty->display('index/H-loading.html');
        }
        public function result(){
            $val=isset($_POST['search'])?$_POST['search']:'';
            $db=new db('goods');
            $result=$db->where("goods like '%".$val."%'")->select();
            var_dump($result);
            var_dump(json_decode($result));
        }
        public function finish(){
            $val=$_POST['search'];
            $val=isset($_POST['search'])?$_POST['search']:'';
            if($val==''){
                $this->smarty->display('index/H-finish.html');
            }else{
                $db=new db('goods');
                $result=$db->where("goods like '%".$val."%'")->select();
                $this->smarty->assign('result',count($result));
                $this->smarty->display('index/H-defeat.html');
            }
        }
        public function defeat(){
            $this->smarty->display('index/H-defeat.html');
        }
	}