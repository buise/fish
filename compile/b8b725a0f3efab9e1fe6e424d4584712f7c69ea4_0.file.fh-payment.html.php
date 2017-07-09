<?php
/* Smarty version 3.1.30, created on 2017-07-09 15:44:08
  from "E:\wamp\www\fish\template\index\fh-payment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596233289900d5_25188440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b725a0f3efab9e1fe6e424d4584712f7c69ea4' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\fh-payment.html',
      1 => 1499561960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596233289900d5_25188440 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>待付款</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/fh-payment.css">
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
iscroll.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
fh-res.js"><?php echo '</script'; ?>
>-->
</head>
<body onload="loaded()">
<div CLASS="fh-nav">
    <img src="<?php echo IMG_PATH;?>
fh-34.png" alt="">
</div>
<ul class="fh-title">
    <li>
        <img src="<?php echo IMG_PATH;?>
fh-21.png" alt="">
    </li>
    <li>
        <a href="">待发货</a>
    </li>
    <li>
        <a href="">待收货</a>
    </li>
    <li>
        <a href="">待评价</a>
    </li>
</ul>
<div id="wrapper">
    <div id="scroller">
        <div class="fh-con">
            <div class="fh-nub">
                <p>订单编号:<span>NO.19239987236</span></p>
            </div>
            <div class="fh-sh">
                <div class="fh-img">
                    <img src="<?php echo IMG_PATH;?>
fh-22.png" alt="">
                </div>
                <div class="fh-js">
                    <h1>北欧创意现代吊灯</h1>
                    <h2>NORDIC IDEA OF MODERN DROPLIGHT</h2>
                    <div class="fh-color">
                        <div></div>
                        <h3>颜色:<span>单一色</span></h3>
                    </div>
                    <div class="fh-color fh-size">
                        <div></div>
                        <h3>规格: <span>88*88</span></h3>
                    </div>
                    <div class="fh-price">
                        <img src="<?php echo IMG_PATH;?>
fh-24.png" alt="">
                        <h5>680.00</h5>
                    </div>
                </div>
            </div>
            <div class="fh-sh">
                <div class="fh-img">
                    <img src="<?php echo IMG_PATH;?>
fh-23.png" alt="">
                </div>
                <div class="fh-js">
                    <h1>北欧创意现代吊灯</h1>
                    <h2>NORDIC IDEA OF MODERN DROPLIGHT</h2>
                    <div class="fh-color">
                        <div></div>
                        <h3>颜色:<span>单一色</span></h3>
                    </div>
                    <div class="fh-color fh-size">
                        <div></div>
                        <h3>规格: <span>88*88</span></h3>
                    </div>
                    <div class="fh-price">
                        <img src="<?php echo IMG_PATH;?>
fh-24.png" alt="">
                        <h5>680.00</h5>
                    </div>
                </div>
            </div>
            <div class="fh-all">
                <p>合计&nbsp;&nbsp;<span>760.00</span><span class="fh-rmb">RMB</span></p>
                <div class="fh-tormb">
                    <img src="<?php echo IMG_PATH;?>
fh-25.png" alt="">
                </div>
            </div>
        </div>
        <div class="fh-con">
            <div class="fh-nub">
                <p>订单编号:<span>NO.19239987236</span></p>
            </div>
            <div class="fh-sh">
                <div class="fh-img">
                    <img src="<?php echo IMG_PATH;?>
fh-26.png" alt="">
                </div>
                <div class="fh-js">
                    <h1>北欧创意现代吊灯</h1>
                    <h2>NORDIC IDEA OF MODERN DROPLIGHT</h2>
                    <div class="fh-color">
                        <div></div>
                        <h3>颜色:<span>单一色</span></h3>
                    </div>
                    <div class="fh-color fh-size">
                        <div></div>
                        <h3>规格: <span>88*88</span></h3>
                    </div>
                    <div class="fh-price">
                        <img src="<?php echo IMG_PATH;?>
fh-24.png" alt="">
                        <h5>680.00</h5>
                    </div>
                </div>
            </div>
            <div class="fh-all">
                <p>合计&nbsp;&nbsp;<span>760.00</span><span class="fh-rmb">RMB</span></p>
                <div class="fh-tormb">
                    <img src="<?php echo IMG_PATH;?>
fh-25.png" alt="">
                </div>
            </div>
        </div>
        <div class="fh-no">
            <img src="<?php echo IMG_PATH;?>
fh-27.png" alt="">
        </div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>

    var myScroll;

    function loaded () {
        myScroll = new IScroll('#wrapper', { mouseWheel: true });
    }

<?php echo '</script'; ?>
><?php }
}
