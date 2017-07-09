<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:35:00
  from "E:\wamp\www\git_item\fish\template\index\cy-sex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a464d292e9_60361475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26cc636d30174bc6d5da2bbe6dc29c3e261cb1dc' => 
    array (
      0 => 'E:\\wamp\\www\\git_item\\fish\\template\\index\\cy-sex.html',
      1 => 1499571299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a464d292e9_60361475 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>性别</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cy-sex.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cy-sex.js"><?php echo '</script'; ?>
>
</head>
<body>
<header class="header">
    <a href="#">
        <img src="<?php echo IMG_PATH;?>
cy-return.png" alt="" class="return">
    </a>
    <img src="<?php echo IMG_PATH;?>
cy-xingbie.png" alt="">
</header>
<!--个人资料-->
<ul id="info" class="cy-info">
    <li class="info-list li-list">
            <img src="<?php echo IMG_PATH;?>
cy-boy.png" alt="">
            <div class="info-word">
                <span class="info-ch">男</span>
                <span class="info-en">male</span>
            </div>
            <div class="slideThree">
                <input type="radio" value="男" id="slideOne" name="sex[]" checked />
                <label for="slideOne"></label>
            </div>
    </li>
    <li class="info-list li-list">
            <img src="<?php echo IMG_PATH;?>
cy-girl.png" alt="">
            <div class="info-word">
                <span class="info-ch">女</span>
                <span class="info-en">female</span>
            </div>
            <div class="slideThree">
                <input type="radio" value="女" id="slideTwo" name="sex[]"  checked/>
                <label for="slideTwo"></label>
            </div>
    </li>
    <li class="info-list li-list">
            <img src="<?php echo IMG_PATH;?>
cy-baomi.png" alt="">
            <div class="info-word">
                <span class="info-ch">保密</span>
                <span class="info-en">secret</span>
            </div>
            <div class="slideThree">

                <input type="radio" value="保密" id="slideThree" name="sex[]"  checked/>
                <label for="slideThree"></label>
            </div>
    </li>
</ul>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        var sex=[];
        $("input[type=radio]").each(function (index,val) {
            sex=$(val).val()
            console.log(sex)

        })
        console.log(sex)
        $.ajax({
            url:"index.php?m=index&f=personal&a=sex",
            type: "POST",
            data: "sex=sex",
            success: function(msg){
//                alert( "Data Saved: " + msg );
            }

        })
    })
<?php echo '</script'; ?>
>
<?php }
}
