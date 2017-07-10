<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:49:37
  from "D:\wamp\www\fish\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962eb41bbb146_57350632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a0c4657bd1c7568644def74a864b5538f4a182' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\admin\\addRole.html',
      1 => 1499002341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962eb41bbb146_57350632 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
</head>
<style>
    body{
        padding-top: 20px;
        box-sizing: border-box;
    }
</style>
<body>
<form class="form-horizontal" action="index.php?m=admin&f=role&a=addCon" method="post">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">角色名</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="rolename" name="rname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加角色</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
