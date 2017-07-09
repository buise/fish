<?php
/* Smarty version 3.1.30, created on 2017-07-09 15:16:36
  from "E:\wamp\www\fish\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59622cb49f8f00_31413678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4fdda4b42de8c28ddefc4755275adfbffc313f' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\index.html',
      1 => 1499605506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59622cb49f8f00_31413678 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="index.php?f=search" class="H-search">
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
                        <li class="swiper-slide">
                            <div class="con">
                                <img src="<?php echo IMG_PATH;?>
H-sale1.png">
                                <p class="title">欧普照明灯</p>
                                <p>CLOTH ART SOFA</p>
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
                        </li>
                        <li class="swiper-slide">
                            <div class="con">
                                <img src="<?php echo IMG_PATH;?>
H-sale2.png">
                                <p class="title">欧普照明灯</p>
                                <p>CLOTH ART SOFA</p>
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
                        </li>
                        <li class="swiper-slide">
                            <div class="con">
                                <img src="<?php echo IMG_PATH;?>
H-sale3.png">
                                <p class="title">欧普照明灯</p>
                                <p>CLOTH ART SOFA</p>
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
                        </li>
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
                       <li>
                           <img src="<?php echo IMG_PATH;?>
H-design1.png">
                           <p class="title">大师级作品上线</p>
                           <p>MASTER DESIGN ONLINE</p>
                           <div class="H-line"></div>
                           <p class="H-repeat">MASTER DESIGN ONLINE</p>
                       </li>
                       <li>
                           <img src="<?php echo IMG_PATH;?>
H-design1.png">
                           <p class="title">大师级作品上线</p>
                           <p>MASTER DESIGN ONLINE</p>
                           <div class="H-line"></div>
                           <p class="H-repeat">MASTER DESIGN ONLINE</p>
                       </li>
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
                    <li class="H-devise-con">
                        <div class="con-top">
                            <img src="<?php echo IMG_PATH;?>
H-devise1.png" alt="">
                            <p class="title">波西米亚田园风格</p>
                            <p>用家具表现悠闲、舒畅、自然的生活情趣,你想要的舒适尽在这里淋漓尽致的展现……</p>
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
                    </li>
                    <li class="H-devise-con">
                        <div class="con-top">
                            <img src="<?php echo IMG_PATH;?>
H-devise1.png" alt="">
                            <p class="title">波西米亚田园风格</p>
                            <p>用家具表现悠闲、舒畅、自然的生活情趣,你想要的舒适尽在这里淋漓尽致的展现……</p>
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
                    </li>
                </ul>
            </div>

            <!--猜你喜欢-->
            <div class="H-like">
                <div class="H-like-top">
                    <img src="<?php echo IMG_PATH;?>
H-title4.png"/>
                </div>
                <ul class="H-like-bottom">
                    <li>
                        <div class="left">
                            <img src="<?php echo IMG_PATH;?>
H-like1.png" alt="">
                        </div>
                        <div class="right">
                            <div class="right-top">
                                <p class="title">北欧风格沙发</p>
                                <p>NORDIC STYLE SOFA</p>
                                <img src="<?php echo IMG_PATH;?>
H-like-line.png" alt="">
                                <p>具有着独特的美学特点呈现出的乡土格调……</p>
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
                    </li>
                    <li>
                        <div class="left">
                            <img src="<?php echo IMG_PATH;?>
H-like2.png" alt="">
                        </div>
                        <div class="right">
                            <div class="right-top">
                                <p class="title">北欧风格沙发</p>
                                <p>NORDIC STYLE SOFA</p>
                                <img src="<?php echo IMG_PATH;?>
H-like-line.png" alt="">
                                <p>具有着独特的美学特点呈现出的乡土格调……</p>
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
                    </li>
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
