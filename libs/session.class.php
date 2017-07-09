<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 22:46
 */
class session{
    public function __construct(){
        session_start();
    }
    /*增 删 全删*/
    public function setSession($key,$val){
        $_SESSION[$key]=$val;
    }
    public function getSession($key){
        return isset($_SESSION[$key])?$_SESSION[$key]:null;
    }
    public function isSeSet($key){
        if (!isset($_SESSION[$key])){
            return false;
        }
        return true;
    }
    public function delSession($key){
        unset($_SESSION[$key]);
    }
    public function clear(){
        foreach ($_SESSION as $item=>$value){
            unset($_SESSION["$item"]);
        }
    }
}