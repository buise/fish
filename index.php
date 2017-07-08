<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 15:55
 */
header("content-type:text/html;charset=utf8");
//定义目录
define("MVC","ok");
//echo "<pre>";
//var_dump($_SERVER);
//文件运行目录 为了引入文件
//项目运行的文件根目录
define("ROOT_PATH",substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'],"/")+1));
//libs目录
define("LIBS_PATH",ROOT_PATH."libs/");
//模块的目录
define("MODULES_PATH",ROOT_PATH."modules/");
//服务器目录 为了运行项目
//服务器根目录
define("URL_PATH",$_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".substr($_SERVER['SCRIPT_NAME'],1,strrpos($_SERVER['SCRIPT_NAME'],'/')));
//css js img 百度编辑器 目录
define("STATIC_PATH",URL_PATH."static");
define("CSS_PATH",STATIC_PATH."/css/");
define("IMG_PATH",STATIC_PATH."/img/");
define("JS_PATH",STATIC_PATH."/js/");
define("FONT_PATH",STATIC_PATH."/font/");
define("EDIT_PATH",STATIC_PATH."/editor/");



include_once LIBS_PATH."route.class.php";
require_once LIBS_PATH."db.class.php";
require_once LIBS_PATH."main.class.php";
require_once LIBS_PATH."tree.class.php";
require_once LIBS_PATH."img.class.php";
require_once LIBS_PATH."session.class.php";
require_once LIBS_PATH."smarty/Smarty.class.php";
require_once LIBS_PATH."smarty/uploadfile.class.php";
$objRoute=new route();
$objRoute->getInfo();