<?php
/* Smarty version 3.1.30, created on 2017-07-10 02:50:28
  from "E:\wamp\www\fish\template\index\cll-ar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962cf5441f0f8_78000245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d3b46cade2fbf1310121078072d5989a3cc764' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\cll-ar.html',
      1 => 1499646926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962cf5441f0f8_78000245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="x5-orientation" content="portrait | landscape" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true" />
    <meta name="full-screen" content="yes">
    <meta name="format-detection" content="telephone=no, email=no" />
    <title>AR</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cll-ar.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
hammer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cll-ar.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="header">
        <a href="javascript:;">
            <img src="<?php echo IMG_PATH;?>
H-back.png" alt="">
        </a>
    </div>
    <div class="content">
        <!--拖-->
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgurl']->value;?>
" alt="" class="goods" id="move-box">
        <!--加-->
        <img src="<?php echo IMG_PATH;?>
ar_05.png" alt="" class="jia">
        <!--减-->
        <img src="<?php echo IMG_PATH;?>
ar_11.png" alt="" class="jie">
        <!--图列表-->
        <div class="tu">
            <div class="imgbox">
                <span class="active">
                    <img src="<?php echo IMG_PATH;?>
imgactive_03.png" alt="">
                </span>
                <img src="<?php echo IMG_PATH;?>
class_17.png" alt="">
            </div>
            <div class="imgbox imgactive">
                <span class="active">
                    <img src="<?php echo IMG_PATH;?>
imgactive_03.png" alt="">
                </span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['imgurl']->value;?>
" alt="">
            </div>
            <div class="imgbox">
                <span class="active">
                    <img src="<?php echo IMG_PATH;?>
imgactive_03.png" alt="">
                </span>
                <img src="<?php echo IMG_PATH;?>
class_54.png" alt="">
            </div>
            <div class="imgbox">
                <span class="active">
                    <img src="<?php echo IMG_PATH;?>
imgactive_03.png" alt="">
                </span>
                <img src="<?php echo IMG_PATH;?>
ard_03.png" alt="">
            </div>
        </div>

    </div>
    <div id="footer">
        <div class="left">
        </div>
        <a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['lid']->value;?>
">
            <img src="<?php echo IMG_PATH;?>
ar_09.png" alt="">
        </a>
    </div>
</body>
</html><?php }
}
