<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:17:12
  from "E:\wamp\www\git_item\fish\template\index\cy-pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962e3a8b66e83_36017791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1352b6c12b38de2c8bdc2a087b709b8060a82087' => 
    array (
      0 => 'E:\\wamp\\www\\git_item\\fish\\template\\index\\cy-pay.html',
      1 => 1499612211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962e3a8b66e83_36017791 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cy-pay.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <a href="#">
            <img src="<?php echo IMG_PATH;?>
cy-return.png" alt="" class="return">
        </a>
        <img src="<?php echo IMG_PATH;?>
cy-chose.png" alt="" class="word">
    </header>
    <section>
        <div class="pay-bg">
            <div class="three-pay">
                <p class="three-pay-ch">第三方支付</p>
                <p class="three-pay-en">Third-party payment</p>
            </div>
            <div class="pay-way">
                <a href="">
                    <img src="<?php echo IMG_PATH;?>
cy-zhi.png" alt="" class="zhi">
                </a>
                <a href="">
                    <img src="<?php echo IMG_PATH;?>
cy-weixin.png" alt="" class="wechat">
                </a>
            </div>
            <div class="three-pay">
                <p class="three-pay-ch">其他支付方式</p>
                <p class="three-pay-en">Other payment methods</p>
            </div>
            <ul class="other-pay">
               <li class="other-list">
                   <a href="">
                       <img src="<?php echo IMG_PATH;?>
cy-huodao.png" alt="">
                       <div class="other-word">
                           <p class="other-ch">货到付款</p>
                           <p class="other-en">cash on delivery</p>
                       </div>
                       <div class="line"></div>
                   </a>
               </li>
               <li class="other-list">
                   <a href="">
                       <img src="<?php echo IMG_PATH;?>
cy-card.png" alt="">
                       <div class="other-word">
                           <p class="other-ch">银行卡</p>
                           <p class="other-en">bank card</p>
                       </div>
                       <div class="circle">
                           3
                       </div>
                   </a>
               </li>
               <li class="other-list">
                   <a href="">
                       <img src="<?php echo IMG_PATH;?>
cy-wallet.png" alt="">
                       <div class="other-word">
                           <p class="other-ch">本地钱包</p>
                           <p class="other-en">local wallet</p>
                       </div>
                       <div class="line"></div>
                   </a>

               </li>
               <li class="other-list next">
                   <a href="index.php?m=index&f=pay&a=have">
                       <div class="other-word">
                           <p class="other-ch">下一步</p>
                           <p class="other-en">next step</p>
                       </div>
                   </a>

               </li>
            </ul>
        </div>
    </section>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $(".return").click(function () {
            history.go(-1);
        })
    })
<?php echo '</script'; ?>
><?php }
}
