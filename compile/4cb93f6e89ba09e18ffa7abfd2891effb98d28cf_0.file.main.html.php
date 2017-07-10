<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:11:19
  from "D:\wamp\www\fish\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962e247e3b0c9_87940476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cb93f6e89ba09e18ffa7abfd2891effb98d28cf' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\admin\\main.html',
      1 => 1499495234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962e247e3b0c9_87940476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台主界面</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
main.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin/main.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
iconfont.css">
</head>
<body>
<header>
    <p class="ceshi">
        欢迎<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
来到后台管理界面
    </p>
    <span class="time"></span>

    <span>
            <a href="index.php?m=admin&f=login&a=logout">[注销]</a>
        </span>
    <span>
            <a href="index.php" target="_blank" style="color: #f38ce1">[站点首页]</a>
        </span>
    <span>
            <a href="clearData.php" class="clear" style="color:#a0ffa0;">[一键清除数据]</a>
        </span>
</header>
<div class="box">
    <div class="left">
        <ul>
            <li>
                <a href="javascript:;">用户管理 <span class="iconfont icon-jikediancanicon13"></span></a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=user&a=addUser" target="iframe">添加用户</a>
                    </li>

                    <li>
                        <a href="index.php?m=admin&f=user&a=lookUser" target="iframe">查看用户</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">栏目管理<span class="iconfont icon-jikediancanicon13"></span></a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=category&a=addCategory" target="iframe">添加栏目</a>
                    </li>

                    <li>
                        <a href="javascript:;" target="iframe">查看栏目</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:;">角色管理<span class="iconfont icon-jikediancanicon13"></span></a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=role&a=addRole" target="iframe">添加角色</a>
                    </li>
                    <li>
                        <a href="#" target="iframe">查看角色</a>
                    </li>
                </ul>
            </li>

            <!--内容管理-->
            <li>
                <a href="javascript:;">内容管理<span class="iconfont icon-jikediancanicon13"></span></a>
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=content&a=addContent" target="iframe">添加内容</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=content&a=showContent" target="iframe">添加内容</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <div class="right">
        <iframe src="template/admin/welcome.html" frameborder="0" name="iframe">

        </iframe>
    </div>
</div>
</body>
</html><?php }
}
