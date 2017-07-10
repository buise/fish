<?php
/* Smarty version 3.1.30, created on 2017-07-10 15:13:20
  from "E:\wamp\www\a\fish\template\index\fh-login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59637d70d5c3f0_75187270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9481991376edfc3ada8f20e2a67362125c4ba52f' => 
    array (
      0 => 'E:\\wamp\\www\\a\\fish\\template\\index\\fh-login.html',
      1 => 1499654303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59637d70d5c3f0_75187270 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>登录</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/fh-login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
fh-login.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="fh-nav">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
        <img src="<?php echo IMG_PATH;?>
fh-5.png" alt="">
    </a>

    <div class="fh-res">
        <a href="index.php?f=login&a=res">注册</a>
    </div>
</div>
<div class="fh-con">
    <img src="<?php echo IMG_PATH;?>
fh-6.png" alt="" class="fh-tx">
    <form action="" class="fh-bd">
        <input type="text" name="name" placeholder="请输入您的账号" autocomplete="off">
        <img src="<?php echo IMG_PATH;?>
fh-7.png" alt="" class="fh-xf">
        <div class="fh-ts">
            <img src="<?php echo IMG_PATH;?>
fh-11.png" alt="" class="fh-yes">
        </div>
        <!--<div class="fh-ts2">账号输入错误</div>-->
        <input type="password" name="pass" placeholder="请输入您的密码" autocomplete="off">
        <img src="<?php echo IMG_PATH;?>
fh-8.png" alt="" class="fh-s">
        <img src="<?php echo IMG_PATH;?>
fh-9.png" alt="" class="fh-yj">
        <label>
            <input type="radio" name="dan">&nbsp;记住密码
        </label>
        <a href="javascript:;" class="fh-wj">忘记密码？</a>
        <div class="fh-submit"></div>
    </form>
</div>

<div class="fh-click">
    <!--加载中-->
    <div class="fh-loading">
        <img src="<?php echo IMG_PATH;?>
fh-14.png" alt="">
    </div>
    <!--登录失败-->
    <div class="fh-fail">
        <img src="<?php echo IMG_PATH;?>
fh-12.png" alt="">
        <a href="index.php?f=login" class="fh-again"></a>
    </div>
    <!--登录成功-->
    <div class="fh-success">
        <img src="<?php echo IMG_PATH;?>
fh-13.png" alt="">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="fh-go"></a>
    </div>
</div>
</body>
</html><?php }
}
