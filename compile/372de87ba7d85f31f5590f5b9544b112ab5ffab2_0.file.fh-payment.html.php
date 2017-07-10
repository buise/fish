<?php
/* Smarty version 3.1.30, created on 2017-07-10 22:22:01
  from "E:\wamp\www\a\fish\template\index\fh-payment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59638d89bf1c27_27629860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372de87ba7d85f31f5590f5b9544b112ab5ffab2' => 
    array (
      0 => 'E:\\wamp\\www\\a\\fish\\template\\index\\fh-payment.html',
      1 => 1499696520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59638d89bf1c27_27629860 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="index.php?f=order&a=send&lid=<?php echo $_smarty_tpl->tpl_vars['lid']->value;?>
">待发货</a>
    </li>
    <li>
        <a href="#">待收货</a>
    </li>
    <li>
        <a href="#">待评价</a>
    </li>
</ul>
<div id="wrapper">
    <div id="scroller">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="fh-con">
            <div class="fh-nub">
                <p>订单编号:<span>NO.<?php echo $_smarty_tpl->tpl_vars['v']->value['ordernumber'];?>
</span></p>
            </div>
            <div class="fh-sh">
                <div class="fh-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                </div>
                <div class="fh-js">
                    <h1><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</h2>
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
                        <h5><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</h5>
                    </div>
                </div>
            </div>
            <div class="fh-all">
                <p>合计&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span><span class="fh-rmb">RMB</span></p>
                <div class="fh-tormb">
                    <a href="index.php?m=index&f=pay&a=show">
                        <img src="<?php echo IMG_PATH;?>
fh-25.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
    $(function () {
        $(".fh-nav>img").click(function () {
            history.go(-1)
        })

    })

<?php echo '</script'; ?>
><?php }
}
