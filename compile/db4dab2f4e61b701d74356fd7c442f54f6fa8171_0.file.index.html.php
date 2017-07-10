<?php
/* Smarty version 3.1.30, created on 2017-07-10 16:22:22
  from "E:\wamp\www\a\fish\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59638d9e1e8155_83211856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4dab2f4e61b701d74356fd7c442f54f6fa8171' => 
    array (
      0 => 'E:\\wamp\\www\\a\\fish\\template\\index\\index.html',
      1 => 1499696021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59638d9e1e8155_83211856 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>首页</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.css">
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
swiper.js"><?php echo '</script'; ?>
>
</head>
<body>	
	<div id="header">
        <div class="H-header-top">
            <img src="<?php echo IMG_PATH;?>
H-local.png" alt="">
            <img src="<?php echo IMG_PATH;?>
H-logo.png" alt="">
            <img src="<?php echo IMG_PATH;?>
H-message.png" alt="">
        </div>
        <a href="index.php?m=index&f=search" class="H-search">
            <input type="text" value="商品名/设计师/分类……">
            <img src="<?php echo IMG_PATH;?>
H-serach.png" alt="">
        </a>
    </div>

	<div id="wrapper">
        <div id="scroller">
            <!--banner-->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <img class="swiper-slide" src="<?php echo IMG_PATH;?>
H-banner.png">
                    <img class="swiper-slide" src="<?php echo IMG_PATH;?>
H-banner.png">
                    <img class="swiper-slide" src="<?php echo IMG_PATH;?>
H-banner.png">
                    <img class="swiper-slide" src="<?php echo IMG_PATH;?>
H-banner.png">
                    <img class="swiper-slide" src="<?php echo IMG_PATH;?>
H-banner.png">
                </div>
                <div class="swiper-pagination"></div>
            </div>
            
          	<!--限时抢购开始-->
          	<div class="H-sale">
          		<div class="H-sale-top">
          			<img src="<?php echo IMG_PATH;?>
H-title1.png"/>
          		</div>
                <div class="swiper-container1">
                    <ul class="swiper-wrapper H-sale-bottom">
                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sale']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>                    	
                		<li class="swiper-slide">
                			<a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
	                            <div class="con">
	                                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
">
	                                <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
	                                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
	                                <div class="H-pos"></div>
	                            </div>
	                            <ul class="list">
	                                <li>
	                                    <img src="<?php echo IMG_PATH;?>
H-sale4.png" alt="">
	                                    <span>1999</span>
	                                </li>
	                                <li>
	                                    <img src="<?php echo IMG_PATH;?>
H-sale5.png" alt="">
	                                    <span>2999</span>
	                                </li>
	                                <li>
	                                    <img src="<?php echo IMG_PATH;?>
H-sale6.png" alt="">
	                                    <span>29</span>
	                                </li>
	                            </ul>
	                        </a>
                		</li>
                    	
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
               
                    </ul>
                </div>
          	</div>

            <!--免费设计开始-->
            <div class="H-design">
                <div class="H-design-top">
                    <img src="<?php echo IMG_PATH;?>
H-title2.png"/>
                </div>
                <div class="H-design-bottom">
                   <ul>
                   	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['design']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                       <li>
	                       	<a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
	                       		<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
">
	                           <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
	                           <p><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
	                           <div class="H-line"></div>
	                           <p class="H-repeat"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
	                       	</a>                     
                       </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                   </ul>
                    <div class="H-design-bg"></div>
                </div>
            </div>

            <!--最近设计开始-->
            <div class="H-devise">
                <div class="H-devise-top">
                    <img src="<?php echo IMG_PATH;?>
H-title3.png"/>
                </div>
                <ul class="H-devise-bottom">
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devise']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                	<li class="H-devise-con">
                		<a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                		
	                        <div class="con-top">
	                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
">                          
	                            <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
	                            <p><?php echo $_smarty_tpl->tpl_vars['v']->value['intro'];?>
</p>
	                            <img src="<?php echo IMG_PATH;?>
H-index-like.png" class="like"/>
	                        </div>
	                        <ul class="con-bottom">
	                            <li>
	                                <img src="<?php echo IMG_PATH;?>
H-s12.png"/>
	                                <span>3245</span>
	                            </li>
	                            <li>
	                                <img src="<?php echo IMG_PATH;?>
H-s13.png"/>
	                                <span>2342</span>
	                            </li>
	                            <li>
	                                <img src="<?php echo IMG_PATH;?>
H-s14.png"/>
	                                <span>4352</span>
	                            </li>
	                            <li>
	                                <img src="<?php echo IMG_PATH;?>
H-s15.png"/>
	                                <span>89</span>
	                            </li>
	                        </ul>
	                    </a>    
	                </li>
                	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>

            <!--猜你喜欢-->
            <div class="H-like">
                <div class="H-like-top">
                    <img src="<?php echo IMG_PATH;?>
H-title4.png"/>
                </div>
                <ul class="H-like-bottom">                 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['like']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                    	<a href="index.php?m=index&f=goods&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
                    		<div class="left">
	                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
	                        </div>
	                        <div class="right">
	                            <div class="right-top">
	                                <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
	                                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</p>
	                                <img src="<?php echo IMG_PATH;?>
H-like-line.png" alt="">
	                                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['intro'];?>
</p>
	                            </div>
	                            <ul class="con-bottom">
	                                <li>
	                                    <img src="<?php echo IMG_PATH;?>
H-s12.png"/>
	                                    <span>3245</span>
	                                </li>
	                                <li>
	                                    <img src="<?php echo IMG_PATH;?>
H-s13.png"/>
	                                    <span>2342</span>
	                                </li>
	                                <li>
	                                    <img src="<?php echo IMG_PATH;?>
H-s14.png"/>
	                                    <span>4352</span>
	                                </li>
	                            </ul>
	                        </div>
                    	</a>                        
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </div>
	</div>

	<!--底部-->
    <div id="footer">
        <a href="index.php" class="cll-active">
            <img src="<?php echo IMG_PATH;?>
but_09.png" alt="">
            <span>首页</span>
        </a>
        <a href="index.php?m=index&f=classify">
            <img src="<?php echo IMG_PATH;?>
but_12.png" alt="">
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
    
    <?php echo '<script'; ?>
>
        window.onload=function () {
            var myScroll= new IScroll('#wrapper');

            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                autoplay : 2000,
            });

            var swiper1 = new Swiper('.swiper-container1', {
					slidesPerView: 2.3,
			   });

        }
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
