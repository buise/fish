<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 18:45
 */
class db{
    private $host;
    private $user;
    private $pass;
    private $database;
    private $port;
    public $db;
    public function db($table){
        $this->table=$table;
        $config=require ROOT_PATH."config.php";
        $this->host=$config['database']['host'];
        $this->user=$config['database']['user'];
        $this->pass=$config['database']['pass'];
        $this->database=$config['database']['database'];
        $this->port=$config['database']['port'];
        $this->db=new mysqli($this->host,$this->user,$this->pass,$this->database,$this->port);
        if(!$this->db){
            echo mysqli_connect_error();
            exit();
        }
        $this->db->query("set names utf8");
        $this->opts['field']='*';
        $this->opts['where']=$this->opts['order']=$this->opts['limit']=$this->opts['val']="";
    }
    /*
     * 查询 指定字段 表名 条件 排序 限制
     * */
    public function select(){
        $sql="select ".$this->opts['field']." from ".$this->table.$this->opts['where'].$this->opts['order'].$this->opts['limit'];
//        echo $sql;
        $result=$this->db->query($sql);
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        return $arr;
    }
    /*获取字段*/
    public function setField($parameter){
        $this->opts['field']=$parameter;
        return $this;
    }
    /*获取值*/
    public function setVal($parameter){
        $this->opts['val']=$parameter;
        return $this;
    }
    /*条件*/
    public function where($parameter){
        $this->opts['where']=" WHERE ".$parameter;
        return $this;
    }
    /*排序*/
    public function order($parameter){
        $this->opts['order']=" ORDER BY ".$parameter;
        return $this;
    }
    /*限制*/
    public function limit($parameter){
        $this->opts['limit']=" LIMIT ".$parameter;
        return $this;
    }
    /*删除*/
    public function delete($parameter=""){
        $this->opts["where"]=empty($parameter)?$this->opts["where"]:" WHERE ".$parameter;
        $sql="delete from ".$this->table.$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    /*更新*/
    public function update($parameter=""){
        if (!empty($parameter)){
            $parameter=strtolower($parameter);
            $index=strrpos($parameter,'where');
            if($index>-1){
                if ($index==0){
                    $this->opts["where"]=" ".substr($parameter,0);
                    $this->opts["field"]=$this->opts["field"];
                }else if($index>0){
                    $this->opts["where"]=" ".substr($parameter,$index);
                    $this->opts["field"]=substr($parameter,0,$index);
                }
            }else{
                $this->opts["where"]=$this->opts["where"];
                $this->opts["field"]=$parameter;
            }
        }
        $sql="update ".$this->table." set ".$this->opts["field"].$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    /*添加*/
    public function insert($parameter=''){
        if (!empty($parameter)){
            $key="";
            $val="";
            $arr=explode(',',$parameter);
            foreach ($arr as $v){
                $value=explode('=',$v);
                $key.=$value[0].",";
                $val.=$value[1].",";
            }
            $this->opts['field']=substr($key,0,-1);
            $this->opts['val']=substr($val,0,-1);
        }
        $sql="insert into ".$this->table." (".$this->opts["field"].") VALUES (".$this->opts['val'].")";
        $re=$this->db->query($sql);
        return $re;
    }
}