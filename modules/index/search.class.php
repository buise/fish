<?php
	class search extends main{
		public function init(){
	        $this->smarty->display('index/H-search.html');
	    }
	    public function search(){
	    	$val=$_POST['search'];
//	    	var_dump($val);
//	    	$result=$db->select();
	    }
	}