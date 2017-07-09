<?php
	class search extends main{
		public function init(){
	        $this->smarty->display('index/H-search.html');
	    }
        public function loading(){
            $this->smarty->display('index/H-loading.html');
        }
        public function result(){
            $res=$_POST['res'];
            $db=new db('lists');
            $result=$db->where("cname like '%".$res."%'")->select();
            echo json_encode($result);
        }
        public function finish(){
            $val=$_POST['search'];
            $val=isset($_POST['search'])?$_POST['search']:'';
            if($val==''){
                $this->smarty->display('index/H-finish.html');
            }else{
                $db=new db('lists');
                $result=$db->where("cname like '%".$val."%'")->select();
                $this->smarty->assign('result',count($result));
                $this->smarty->display('index/H-defeat.html');
            }
        }
        public function defeat(){
            $this->smarty->display('index/H-defeat.html');
        }
	}