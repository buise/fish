<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:32:58
  from "E:\wamp\www\fish\template\index\cll-goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a3ea389f19_99175487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988bc7b5915dbfa34acb426bc98be9ff01fd8687' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\cll-goods.html',
      1 => 1499571177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a3ea389f19_99175487 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>商品详情</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cll-goods.css">
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cll-goods.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var myScroll;
        function loaded () {
            myScroll = new IScroll('#wrapper');
        }
        $(document).ready(function () {
            // 返回
            $("#header a").click(function () {
                window.history.go(-1)
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body onload="loaded()">
    <div id="header">
        <a href="">
            <img src="<?php echo IMG_PATH;?>
H-back.png" alt="">
        </a>
    </div>
    <div id="wrapper">
        <div id="scroller">
            <!--图图-->
            <div class="thumb" amount="<?php echo $_smarty_tpl->tpl_vars['mess']->value[0]['amount'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['mess']->value[0]['imgurl'];?>
" alt="">
                <span class="one"><?php echo $_smarty_tpl->tpl_vars['mess']->value[0]['cname'];?>
</span>
                <span class="three">￥<h><?php echo $_smarty_tpl->tpl_vars['mess']->value[0]['price'];?>
</h></span>
                <span class="two"><?php echo $_smarty_tpl->tpl_vars['mess']->value[0]['ename'];?>
</span>
                <p><?php echo $_smarty_tpl->tpl_vars['mess']->value[0]['intro'];?>
</p>
            </div>
            <!--商品详情-->
            <div class="com detail">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
goods_07.png" alt="">
                </div>
                <!--内容-->
                <div class="con">
                    <p><img src="<?php echo IMG_PATH;?>
circle_03.png" alt="">品牌：曼斯菲尔</p>
                    <p><img src="<?php echo IMG_PATH;?>
circle_03.png" alt="">型号：A-002</p>
                    <p><img src="<?php echo IMG_PATH;?>
circle_03.png" alt="">设计元素：做旧 其他 原木 异形 拼接 金属</p>
                    <p><img src="<?php echo IMG_PATH;?>
circle_03.png" alt="">形状：长方形</p>
                    <p><img src="<?php echo IMG_PATH;?>
circle_03.png" alt="">产地：上海</p>
                    <p class="gui"><img src="<?php echo IMG_PATH;?>
circle_03.png" alt="">规格参数</p>
                    <p class="pleft">材质：实木</p>
                    <p class="pleft">家具结构：框架结构</p>
                    <p class="pleft">尺寸：142*65*75木板5cm</p>
                    <p class="pleft">风格：欧式复古</p>
                </div>
            </div>
            <!--颜色选择-->
            <div class="com color">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
goods_11.png" alt="">
                </div>
                <!--内容-->
                <div class="con">
                    <ul>
                        <li>
                            <div class="color1"></div>
                            <span>银白</span>
                        </li>
                        <li>
                            <div class="color2"></div>
                            <span>宝蓝</span>
                        </li>
                        <li>
                            <div class="color3"></div>
                            <span>雪青</span>
                        </li>
                        <li>
                            <div class="color4"></div>
                            <span class="active">樱草色</span>
                        </li>
                        <li>
                            <div class="color5"></div>
                            <span>洋红</span>
                        </li>
                        <li>
                            <div class="color6"></div>
                            <span>黑色</span>
                        </li>
                        <li>
                            <div class="color7"></div>
                            <span>玄青</span>
                        </li>
                        <li>
                            <div class="color8"></div>
                            <span>紫檀</span>
                        </li>
                        <li>
                            <div class="color9"></div>
                            <span>红色</span>
                        </li>
                        <li>
                            <div class="color10"></div>
                            <span>青色</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--尺寸大小-->
            <div class="com size">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
goods_13.png" alt="">
                </div>
                <div class="con">
                    <img src="<?php echo IMG_PATH;?>
goods_14.png" alt="">
                </div>
            </div>
            <!--商品细节-->
            <div class="com product">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
goods_17.png" alt="">
                </div>
                <div class="con">
                    <img src="<?php echo IMG_PATH;?>
goods_19.png" alt="">
                    <h4>利落设计</h4>
                    <p>拆边三角的稳固平稳安全，增大受力面积保护地板。</p>
                    <img src="<?php echo IMG_PATH;?>
goods_21.png" alt="">
                    <h4>美在面上</h4>
                    <p>桌面美观易清洁，边缘光滑细腻，降低磕碰伤害。</p>
                </div>
            </div>
            <!--客户评价-->
            <div class="com evaluate">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
goods_24.png" alt="">
                </div>
                <div class="con">
                    <div>
                        <span>很棒哦</span>
                        <div class="color1"></div>
                        <img src="<?php echo IMG_PATH;?>
goods_27.png" alt="">
                    </div>
                    <div>
                        <span>还不错</span>
                        <div class="color2"></div>
                        <img src="<?php echo IMG_PATH;?>
goods_30.png" alt="">
                    </div>
                    <div>
                        <span>一般般</span>
                        <div class="color3"></div>
                        <img src="<?php echo IMG_PATH;?>
goods_32.png" alt="">
                    </div>
                    <div>
                        <span>太差了</span>
                        <div class="color4"></div>
                        <img src="<?php echo IMG_PATH;?>
goods_34.png" alt="">
                    </div>
                </div>
            </div>
            <!--数量选择-->
            <div class="com count">
                <!--标题-->
                <div class="title">
                    <img src="<?php echo IMG_PATH;?>
goods_36.png" alt="">
                </div>
                <div class="con">
                    <div class="left">
                        <img src="<?php echo IMG_PATH;?>
goods_40.png" alt="" class="jie">
                        <span>1</span>
                        <img src="<?php echo IMG_PATH;?>
goods_42.png" alt="" class="jia">
                    </div>
                    <div class="right">
                        总计：<span><?php echo $_smarty_tpl->tpl_vars['mess']->value[0]['price'];?>
</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="footer">
        <a href="fh-payment.html">
            <img src="<?php echo IMG_PATH;?>
go_03.png" alt="">
        </a>
        <a href="cy-pay.html">
            <img src="<?php echo IMG_PATH;?>
go_05.png" alt="">
        </a>
    </div>
</body>
</html><?php }
}
