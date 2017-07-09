<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:11:39
  from "E:\wamp\www\fish\template\index\cll-custom.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59619eeb579768_24045988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcd4e5928dc0b454cb1ad60cc6c11e76b274588c' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\cll-custom.html',
      1 => 1499569898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59619eeb579768_24045988 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>订制设计</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cll-custom.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var myScroll;
        function loaded () {
            myScroll = new IScroll('#wrapper');
        }
    <?php echo '</script'; ?>
>
</head>
<body onload="loaded()">
    <div id="header">
        <img src="<?php echo IMG_PATH;?>
cll_03.png" alt="">
    </div>

    <div id="wrapper">
        <div id="scroller">
            <!--ar体验 定制-->
            <ul class="cll-nav">
               <li>
                   <a href="" class="ar">
                       <img src="<?php echo IMG_PATH;?>
cll_07.png" alt="">
                   </a>
               </li>
                <li>
                    <a href="" class="dingzhi">
                        <img src="<?php echo IMG_PATH;?>
cll_09.png" alt="">
                    </a>
                </li>
            </ul>
            <!--灯具-->
            <div class="cll-section">
                <!--标题-->
                <div class="cll-title">
                    <img src="<?php echo IMG_PATH;?>
cll_12.png" alt="">
                    <a href="">
                        <img src="<?php echo IMG_PATH;?>
cll_14.png" alt="">
                    </a>
                </div>
                <!--内容-->
                <div class="cll-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['light']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=ar&imgurl=<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="ptitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="penglish"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </div>
            </div>

            <!--家饰-->
            <div class="cll-section">
                <!--标题-->
                <div class="cll-title">
                    <img src="<?php echo IMG_PATH;?>
cll_22.png" alt="">
                    <a href="">
                        <img src="<?php echo IMG_PATH;?>
cll_14.png" alt="">
                    </a>
                </div>
                <!--内容-->
                <div class="cll-content home">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['home']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=ar&imgurl=<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="htitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="henglish"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

            <!--沙发-->
            <div class="cll-section">
                <!--标题-->
                <div class="cll-title">
                    <img src="<?php echo IMG_PATH;?>
cll_28.png" alt="">
                    <a href="">
                        <img src="<?php echo IMG_PATH;?>
cll_14.png" alt="">
                    </a>
                </div>
                <!--内容-->
                <div class="cll-content sofa">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sofa']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=ar&imgurl=<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="ptitle stitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="penglish"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </div>
            </div>

            <!--床-->
            <div class="cll-section">
                <!--标题-->
                <div class="cll-title">
                    <img src="<?php echo IMG_PATH;?>
cll_34.png" alt="">
                    <a href="">
                        <img src="<?php echo IMG_PATH;?>
cll_14.png" alt="">
                    </a>
                </div>
                <!--内容-->
                <div class="cll-bed">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bed']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=ar&imgurl=<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="btitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="benglish"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

            <!--茶几-->
            <div class="cll-section">
                <!--标题-->
                <div class="cll-title">
                    <img src="<?php echo IMG_PATH;?>
cll_40.png" alt="">
                    <a href="">
                        <img src="<?php echo IMG_PATH;?>
cll_14.png" alt="">
                    </a>
                </div>
                <!--内容-->
                <div class="cll-tea">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tea']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=ar&imgurl=<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="btitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="benglish"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

        </div>
    </div>

    <div id="footer">
        <a href="index.php">
            <img src="<?php echo IMG_PATH;?>
but_09.png" alt="">
        </a>
        <a href="index.php?m=index&f=classify">
            <img src="<?php echo IMG_PATH;?>
but_12.png" alt="">
        </a>
        <a href="index.php?m=index&f=custom" class="cll-active">
            <img src="<?php echo IMG_PATH;?>
but_03.png" alt="">
            <span>定制设计</span>
        </a>
        <a href="index.php?m=index&f=personal">
            <img src="<?php echo IMG_PATH;?>
but_06.png" alt="">
        </a>
    </div>
</body>
</html><?php }
}
