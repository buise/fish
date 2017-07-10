<?php
/* Smarty version 3.1.30, created on 2017-07-10 02:51:06
  from "E:\wamp\www\fish\template\index\cy-sex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962cf7a694ae9_78326183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ce9a0b8b7e0bea32e6375a8fe22102945a57b98' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\index\\cy-sex.html',
      1 => 1499646926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962cf7a694ae9_78326183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="x5-orientation" content="portrait | landscape" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true" />
    <meta name="full-screen" content="yes">
    <meta name="format-detection" content="telephone=no, email=no" />
    <title>性别</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/cy-sex.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cy-sex.js"><?php echo '</script'; ?>
>
</head>
<body>
<header class="header">
    <a href="#">
        <img src="<?php echo IMG_PATH;?>
cy-return.png" alt="" class="return">
    </a>
    <img src="<?php echo IMG_PATH;?>
cy-xingbie.png" alt="">
    <span class="complete">完成</span>
</header>
<!--个人资料-->
<ul id="info" class="cy-info" sex="<?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
">
    <li class="info-list li-list">
            <img src="<?php echo IMG_PATH;?>
cy-boy.png" alt="">
            <div class="info-word">
                <span class="info-ch">男</span>
                <span class="info-en">male</span>
            </div>
            <div class="slideThree">
                <input type="radio" value="1" id="slideOne" name="sex"  />
                <label for="slideOne"></label>
            </div>
    </li>
    <li class="info-list li-list">
            <img src="<?php echo IMG_PATH;?>
cy-girl.png" alt="">
            <div class="info-word">
                <span class="info-ch">女</span>
                <span class="info-en">female</span>
            </div>
            <div class="slideThree">
                <input type="radio" value="2" id="slideTwo" name="sex"  />
                <label for="slideTwo"></label>
            </div>
    </li>
    <li class="info-list li-list">
            <img src="<?php echo IMG_PATH;?>
cy-baomi.png" alt="">
            <div class="info-word">
                <span class="info-ch">保密</span>
                <span class="info-en">secret</span>
            </div>
            <div class="slideThree">

                <input type="radio" value="3" id="slideThree" name="sex" />
                <label for="slideThree"></label>
            </div>
    </li>
</ul>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        var input=3;
        $(".slideThree >label").each(function (index,val) {
            $(val).click(function () {
                input=$(this).prev().val()
//                console.log()
            })
        })



        $(".complete").click(function () {
//            console.log(input);
            $.ajax({
                url:"index.php?f=personal&a=sexcheck",
                type:"post",
                data:{
                    value:input
                },
                success:function (e) {
                    if(e=="ok"){
                        $("input[type=radio]").each(function (index,val) {
                            if($(val).val()==input){
                                $(val).attr("checked","checked")
                            }
                        })
                    }
                }
            })

        })
    })
<?php echo '</script'; ?>
>
<?php }
}
