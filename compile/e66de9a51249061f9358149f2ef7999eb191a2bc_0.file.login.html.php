<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:09:59
  from "D:\wamp\www\fish\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962e1f7461209_50488695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e66de9a51249061f9358149f2ef7999eb191a2bc' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\admin\\login.html',
      1 => 1499327436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962e1f7461209_50488695 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>登录</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
adminlogin.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin/adminlogin.css">
</head>
<body>
    <div class="box">
        <form action="index.php?m=admin&f=login&a=check" method="post">
            <label class="text">
                <span>用户名</span>
                <input type="text" name="user">
            </label>
            <label class="text">
                <span>密码</span>
                <input type="password" name="pass">
            </label>
            <label class="text" id="code">
                <span>验证码</span>
                <input type="text" name="code">
                <img src="index.php?m=admin&f=login&a=code" alt="" onclick="this.src='index.php?m=admin&f=login&a=code&aa='+Math.random()">
            </label>
            <label>
                <button type="submit" >登录</button>
            </label>
        </form>

        <div class="right">
            <p>鱼设计后台登录界面</p>
        </div>
    </div>
</body>
</html><?php }
}
