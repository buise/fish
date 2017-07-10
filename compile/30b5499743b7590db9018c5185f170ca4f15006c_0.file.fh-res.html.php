<?php
/* Smarty version 3.1.30, created on 2017-07-09 17:01:37
  from "E:\wamp\www\git_item\fish\template\index\fh-res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59624551dc0428_65664312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b5499743b7590db9018c5185f170ca4f15006c' => 
    array (
      0 => 'E:\\wamp\\www\\git_item\\fish\\template\\index\\fh-res.html',
      1 => 1499612211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59624551dc0428_65664312 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>注册</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/fh-res.css">
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
fh-res.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="fh-nav">
    <a href="index.php?f=login">
        <img src="<?php echo IMG_PATH;?>
fh-5.png" alt="">
    </a>
</div>
<div class="fh-con">
    <img src="<?php echo IMG_PATH;?>
fh-6.png" alt="" class="fh-tx">
    <form action="" class="fh-bd">
        <input type="text" name="name" placeholder="用户名，2~8个字符" autocomplete="off">
        <img src="<?php echo IMG_PATH;?>
fh-7.png" alt="" class="fh-xf">
        <div class="fh-ts">
            <img src="<?php echo IMG_PATH;?>
fh-11.png" alt="" style="height:100%;display: none" class="fh-yse1">
        </div>
        <!--<div class="fh-ts2">用户名格式错误</div>-->

        <input type="text" name="tel" placeholder="请输入您的手机号" autocomplete="off" class="tel">
        <img src="<?php echo IMG_PATH;?>
fh-16.png" alt="" class="fh-sj">
        <div class="fh-ts3">
            <img src="<?php echo IMG_PATH;?>
fh-11.png" alt="" style="height:100%;display: none" class="fh-yse">
        </div>

        <input type="text" name="yzm" placeholder="请输入验证码" autocomplete="off">
        <img src="<?php echo IMG_PATH;?>
fh-17.png" alt="" class="fh-yz">
        <div class="fh-yzm">发送验证码</div>

        <input type="password" name="pass" placeholder="请输入您的密码" autocomplete="off">
        <img src="<?php echo IMG_PATH;?>
fh-8.png" alt="" class="fh-s">
        <img src=".<?php echo IMG_PATH;?>
fh-9.png" alt="" class="fh-yj">

        <label>
            <input type="radio">我已阅读并接受<span>版权声明</span>条款
        </label>
        <div class="fh-submit"></div>
        <div class="fh-cir">
            <div></div>
            <p>&nbsp;已有账号，去<a href="index.php?f=login">登录</a></p>
        </div>

    </form>
</div>

<div class="fh-click">
    <!--加载中-->
    <div class="fh-loading">
        <img src="<?php echo IMG_PATH;?>
fh-14.png" alt="">
    </div>
    <!--注册失败-->
    <div class="fh-fail">
        <img src="<?php echo IMG_PATH;?>
fh-12.png" alt="">
        <a href="" class="fh-again"></a>
    </div>
    <!--注册成功-->
    <div class="fh-success">
        <img src="<?php echo IMG_PATH;?>
fh-13.png" alt="">
        <a href="" class="fh-go"></a>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $('.fh-yzm').click(function () {
        var tel=$('.tel').val();
        $.ajax({
            url:"index.php?f=login&a=tel",
            type:"post",
            data:{
                to:tel,
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
