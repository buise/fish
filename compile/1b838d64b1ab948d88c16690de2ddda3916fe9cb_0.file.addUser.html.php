<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:49:40
  from "D:\wamp\www\fish\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962eb44f22e52_68913363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b838d64b1ab948d88c16690de2ddda3916fe9cb' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\admin\\addUser.html',
      1 => 1499002341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962eb44f22e52_68913363 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
</head>
<style>
    body{
        padding-top: 20px;
        box-sizing: border-box;
        overflow: hidden;
    }
</style>
<body>
    <form class="form-horizontal" action="index.php?m=admin&f=user&a=addCon" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="username" name="uname">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="upass">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">角色</label>
            <div class="col-sm-8">
                <select class="form-control" name="rid">
                    <option value="0">--选择角色--</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">昵称</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="nickname" name="unick">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">头像</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="photo">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加用户</button>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
