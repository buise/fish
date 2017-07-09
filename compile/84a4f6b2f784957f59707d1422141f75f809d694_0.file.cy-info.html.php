<?php
/* Smarty version 3.1.30, created on 2017-07-09 16:58:58
  from "E:\wamp\www\git_item\fish\template\index\cy-info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596244b22d2db0_72666909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a4f6b2f784957f59707d1422141f75f809d694' => 
    array (
      0 => 'E:\\wamp\\www\\git_item\\fish\\template\\index\\cy-info.html',
      1 => 1499612211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596244b22d2db0_72666909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="x5-orientation" content="portrait | landscape" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true" />
    <meta name="full-screen" content="yes">
    <meta name="format-detection" content="telephone=no, email=no" />
    <title>个人资料</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cy-personal.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<header class="header">
    <a href="#">
        <img src="<?php echo IMG_PATH;?>
cy-return.png" alt="" class="return">
    </a>
    <img src="<?php echo IMG_PATH;?>
cy-info.png" alt="" class="">
</header>
<!--个人资料-->
<ul id="info" class="cy-info">
    <li class="info-list li-list">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
cy-user.png" alt="">
            <div class="info-word">
                <span class="info-ch">账户名</span>
                <span class="info-en">Account name</span>
            </div>
            <p class="right-arrow right-num">13546782311</p>
        </a>
    </li>
    <li class="info-list li-list">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
cy-touxiang.png" alt="">
            <div class="info-word">
                <span class="info-ch">选择头像</span>
                <span class="info-en">Head portait</span>
            </div>
            <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
        </a>
    </li>
    <li class="info-list li-list">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
cy-nickname.png" alt="">
            <div class="info-word">
                <span class="info-ch">更换昵称</span>
                <span class="info-en">nickname</span>
            </div>
            <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
        </a>
    </li>
    <li class="info-list li-list">
        <a href="index.php?m=index&f=personal&a=sex">
            <img src="<?php echo IMG_PATH;?>
cy-sex.png" alt="">
            <div class="info-word">
                <span class="info-ch">性别</span>
                <span class="info-en">gender</span>
            </div>
            <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
        </a>
    </li>
    <li class="info-list li-list">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
cy-address.png" alt="">
            <div class="info-word">
                <span class="info-ch">收货地址</span>
                <span class="info-en">Shipping address</span>
            </div>
            <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
        </a>
    </li>
    <li class="info-list li-list">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
cy-phone.png" alt="">
            <div class="info-word">
                <span class="info-ch">绑定手机</span>
                <span class="info-en">binding mobile phone</span>
            </div>
            <p class="right-arrow">已设置</p>
        </a>
    </li>
    <li class="info-list li-list">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
cy-bankcard.png" alt="">
            <div class="info-word">
                <span class="info-ch">绑定银行卡</span>
                <span class="info-en">binding of bank CARDS</span>
            </div>
            <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
        </a>
    </li>
</ul>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $(".return").click(function () {
            history.go(-1);
        })
    })
<?php echo '</script'; ?>
><?php }
}
