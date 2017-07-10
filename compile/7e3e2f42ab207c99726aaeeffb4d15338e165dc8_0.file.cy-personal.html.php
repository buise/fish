<?php
/* Smarty version 3.1.30, created on 2017-07-10 03:26:44
  from "D:\wamp\www\fish\template\index\cy-personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962d7d4d7ba05_19331814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e3e2f42ab207c99726aaeeffb4d15338e165dc8' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\index\\cy-personal.html',
      1 => 1499613465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962d7d4d7ba05_19331814 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="x5-orientation" content="portrait | landscape" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true" />
    <meta name="full-screen" content="yes">
    <meta name="format-detection" content="telephone=no, email=no" />
    <title>个人中心</title>
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
iscroll.js"><?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
>
    window.onload=function () {
        var myScroll;
        myScroll = new IScroll('#wrapper', {
            mouseWheel: true,
            freeScroll: true
        });
    }
<?php echo '</script'; ?>
>
<body>
<!--头部-->
<header></header>
<div id="wrapper">
    <div id="scroller">
        <div id="header">
            <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
            <div class="photo">
                <a href="index.php?m=index&f=personal&a=info">
                    <img src="<?php echo IMG_PATH;?>
cy-photo.jpg" alt="">
                </a>
            </div>
        </div>
        <!--昵称-->
        <div class="person">
            <p class="en-name">Mr Li d Hepburn</p>
            <p class="ch-name">奥莉黛·赫本</p>
            <p class="sign">生活其实本就该这样平平淡淡…</p>
            <p class="vel">
                57.vel
                <img src="<?php echo IMG_PATH;?>
cy-star7.png" alt="">
            </p>

            <?php } else { ?>

            <div class="photo">
                <a href="index.php?m=index&f=login">
                    <img src="" alt="">
                </a>
            </div>
        </div>
        <!--昵称-->
        <div class="person">
            <p class="en-name">english name</p>
            <p class="ch-name">昵称</p>
            <p class="sign">个性签名</p>
            <p class="vel">
                0.vel
            </p>
            <?php }?>
        </div>

        <!--myorder-->
        <ul id="myorder">
            <li class="order">
                <img src="<?php echo IMG_PATH;?>
cy-myorder.png" alt="">
            </li>
            <li class="o-list o-list-left li-list">
                <a href="index.php?m=index&f=payment&a=show">
                    <img src="<?php echo IMG_PATH;?>
cy-fukuan.png" alt="">
                    <div class="order-word">
                        <p class="order-ch">待付款</p>
                        <p class="order-en">the payment</p>
                    </div>
                </a>
            </li>
            <li class="o-list li-list">
                <a href="index.php?m=index&f=payment&a=show">
                    <img src="<?php echo IMG_PATH;?>
cy-fahuo.png" alt="">
                    <div class="order-word">
                        <p class="order-ch">待发货</p>
                        <p class="order-en">send the goods</p>
                    </div>
                </a>
            </li>
            <li class="o-list o-list-left li-list">
                <a href="#">
                    <img src="<?php echo IMG_PATH;?>
cy-shouhuo.png" alt="">
                    <div class="order-word">
                        <p class="order-ch">待收货</p>
                        <p class="order-en">For the goods</p>
                    </div>
                </a>
            </li>
            <li class="o-list li-list">
                <a href="#">
                    <img src="<?php echo IMG_PATH;?>
cy-pinglun.png" alt="">
                    <div class="order-word">
                        <p class="order-ch">待评价</p>
                        <p class="order-en">To comment on</p>
                    </div>
                </a>
            </li>
        </ul>
        <!--个人资料-->
        <ul id="info">
            <li class="info-list li-list">
                <a href="#">
                    <img src="<?php echo IMG_PATH;?>
cy-shoucang.png" alt="">
                    <div class="info-word">
                        <span class="info-ch">收藏商品</span>
                        <span class="info-en">collection</span>
                    </div>
                    <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
                </a>
            </li>
            <li class="info-list li-list">
                <a href="#">
                    <img src="<?php echo IMG_PATH;?>
cy-quan.png" alt="">
                    <div class="info-word">
                        <span class="info-ch">我的礼券</span>
                        <span class="info-en">Gift certificates</span>
                    </div>
                    <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
                </a>
            </li>
            <li class="info-list li-list">
                <a href="#">
                    <img src="<?php echo IMG_PATH;?>
cy-fenxiang.png" alt="">
                    <div class="info-word">
                        <span class="info-ch">我的分享</span>
                        <span class="info-en">share</span>
                    </div>
                    <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
                </a>
            </li>
            <li class="info-list li-list">
                <a href="#">
                    <img src="<?php echo IMG_PATH;?>
cy-kefu.png" alt="">
                    <div class="info-word">
                        <span class="info-ch">客服中心</span>
                        <span class="info-en">customer service</span>
                    </div>
                    <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
                </a>
            </li>
            <li class="info-list li-list">
                <a href="#">
                    <img src="<?php echo IMG_PATH;?>
cy-guanyu.png" alt="">
                    <div class="info-word">
                        <span class="info-ch">关于我们</span>
                        <span class="info-en">about</span>
                    </div>
                    <img src="<?php echo IMG_PATH;?>
cy-arrow.png" alt="" class="right-arrow">
                </a>
            </li>
        </ul>
    </div>
</div>
<!--底部-->
<div id="footer">
    <a href="index.php">
        <img src="<?php echo IMG_PATH;?>
but_09.png" alt="">
    </a>
    <a href="index.php?m=index&f=classify">
        <img src="<?php echo IMG_PATH;?>
but_12.png" alt="">
    </a>
    <a href="index.php?m=index&f=custom">
        <img src="<?php echo IMG_PATH;?>
but_03.png" alt="">
    </a>
    <a href="index.php?m=index&f=personal" class="cll-active">
        <img src="<?php echo IMG_PATH;?>
but_06.png" alt="">
        <span>个人中心</span>
    </a>
</div>
</body>
</html><?php }
}
