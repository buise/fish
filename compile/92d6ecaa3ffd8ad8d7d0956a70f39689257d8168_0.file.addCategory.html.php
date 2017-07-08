<?php
/* Smarty version 3.1.30, created on 2017-07-06 09:19:41
  from "E:\wamp\www\fish\template\admin\addCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595de48d974355_54458542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d6ecaa3ffd8ad8d7d0956a70f39689257d8168' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\admin\\addCategory.html',
      1 => 1498703783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595de48d974355_54458542 (Smarty_Internal_Template $_smarty_tpl) {
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
    }
</style>
<body>
<form class="form-horizontal" action="index.php?m=admin&f=category&a=addCon" method="post">

    <div class="form-group">
        <label class="col-sm-2 control-label">选择栏目</label>
        <div class="col-sm-8">
            <select class="form-control" name="pid">
                <option value="0">--一级栏目--</option>
                <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">栏目名</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="catname" name="cname">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加栏目</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
