<?php
/* Smarty version 3.1.30, created on 2017-07-10 18:55:17
  from "E:\wamp\www\fish\template\index\cll-classify.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5963b17533b244_19909620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a348f1bc7095a2a3cfa8f21d065c7193601af83' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\cll-classify.html',
      1 => 1499705714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5963b17533b244_19909620 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>分类</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cll-classify.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
touch.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cll-classify.js"><?php echo '</script'; ?>
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
class_03.png" alt="">
    </div>

    <div id="wrapper">
        <div id="scroller">
            <!--导航-->
            <div class="nav">
                <a href="" class="one">
                    <img src="<?php echo IMG_PATH;?>
class_07.png" alt="">
                </a>
                <a href="" class="two">
                    <img src="<?php echo IMG_PATH;?>
class_08.png" alt="">
                </a>
                <a href="" class="three">
                    <img src="<?php echo IMG_PATH;?>
class_09.png" alt="">
                </a>
            </div>
            <!--灯具-->
            <div class="section light">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
class_12.png" alt="">
                </div>
                <!--内容-->
                <div class="con">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['light']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="javascript:;" lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="pc"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="pe"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                        <span><img src="<?php echo IMG_PATH;?>
classnew_06.png" alt=""><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span>
                        <span><img src="<?php echo IMG_PATH;?>
classnew_10.png" alt="">2999</span>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                	<?php echo '<script'; ?>
>
                		var a=$(".light .con a");
                		a.each(function(index,val){
                			touch.on($(val),"tap",function(){
	                			var lid=$(val).attr("lid")
	                			$(val).attr("href","index.php?m=index&f=goods&lid="+lid)
                			})
                		})
                		
                	<?php echo '</script'; ?>
>
                </div>
            </div>

            <!--家饰-->
            <div class="section home">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
class_22.png" alt="">
                </div>
                <!--内容-->
                <div class="con">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['home']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="pc"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="pe"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                        <span><img src="<?php echo IMG_PATH;?>
H-s12.png" alt="">1990</span>
                        <span><img src="<?php echo IMG_PATH;?>
H-s13.png" alt="">2999</span>
                        <span><img src="<?php echo IMG_PATH;?>
H-s14.png" alt="">3999</span>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

            <!--收纳-->
            <div class="section accept">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
class_32.png" alt="">
                </div>
                <!--内容-->
                <div class="con">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accept']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="pc"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="pe"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                        <span><img src="<?php echo IMG_PATH;?>
H-s12.png" alt="">1990</span>
                        <span><img src="<?php echo IMG_PATH;?>
H-s13.png" alt="">2999</span>
                        <span><img src="<?php echo IMG_PATH;?>
H-s14.png" alt="">3999</span>

                        <img src="<?php echo IMG_PATH;?>
classnew_27.png" alt="" class="xin">
                        <img src="<?php echo IMG_PATH;?>
class_40.png" alt="" class="ren">
                        <span class="num"><?php echo $_smarty_tpl->tpl_vars['v']->value['amount'];?>
</span>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
            <!--时尚生活-->
            <div class="section fashion">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
class_51.png" alt="">
                </div>
                <!--内容-->
                <div class="con">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fashion']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
" class="pos<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 pos">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        <p class="pc"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                        <p class="pe"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
                        <span><img src="<?php echo IMG_PATH;?>
H-s12.png" alt="">2435</span>
                        <span><img src="<?php echo IMG_PATH;?>
H-s14.png" alt="">2435</span>
                    </a>
                    <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>

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
        <a href="index.php?m=index&f=classify" class="cll-active">
            <img src="<?php echo IMG_PATH;?>
but_12.png" alt="">
            <span>分类</span>
        </a>
        <a href="index.php?m=index&f=custom">
            <img src="<?php echo IMG_PATH;?>
but_03.png" alt="">
        </a>
        <a href="index.php?m=index&f=personal">
            <img src="<?php echo IMG_PATH;?>
but_06.png" alt="">
        </a>
    </div>

</body>
</html><?php }
}
