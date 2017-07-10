<?php
/* Smarty version 3.1.30, created on 2017-07-10 03:39:11
  from "E:\wamp\www\fish\template\index\fh-shanping.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962dabf0c45d6_94076322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7282db743bc9b7d8952ea5e30b854f0047be7979' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\fh-shanping.html',
      1 => 1499650747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962dabf0c45d6_94076322 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>闪屏</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.js"><?php echo '</script'; ?>
>
</head>
<style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    img{
        width:100%;
        height:100%;
    }
</style>
<body>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <img src="<?php echo IMG_PATH;?>
fh-1.png" alt="" class="swiper-slide">
        <img src="<?php echo IMG_PATH;?>
fh-2.png" alt="" class="swiper-slide">
        <img src="<?php echo IMG_PATH;?>
fh-3.png" alt="" class="swiper-slide">
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        var swiper = new Swiper('.swiper-container',{
            resistanceRatio : 0,
            onTouchEnd:function (swiper) {
                if(swiper.activeIndex==2){
                    location.href="index.php";
                }
            }
        });
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
