<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:49:41
  from "D:\wamp\www\fish\template\admin\lookUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962eb45c7f4c5_85886102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '760ec1553642bff295d7c944755f0d2278457fcb' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\admin\\lookUser.html',
      1 => 1499002341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962eb45c7f4c5_85886102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
</head>
<style>
    body{
        padding-top: 20px;
        padding-left: 30px;
        padding-right: 30px;
        box-sizing: border-box;
        overflow: hidden;
        text-align: center;
    }
    .table th{
        text-align: center;
    }
    .del,.edit{
        width: 30%;
        height: 80%;
        background: red;
        border-radius: 6px;
        color: #fff;
        cursor: pointer;
        float: left;
    }
    .del{
        margin-left: 16%;
        margin-right: 4%;
    }
    .del:hover{
        background: #ff5722;
    }
    .edit:hover{
        color: #fff;
        text-decoration: none;
        background: #ff5722;
    }
</style>
<body>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
                <th>id</th>
                <th>用户名</th>
                <th>密码</th>
                <th>昵称</th>
                <th>头像</th>
                <th>角色</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usermess']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td class="uid"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                <td class="uname"><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
                <td class="upass"><?php echo $_smarty_tpl->tpl_vars['v']->value['upass'];?>
</td>
                <td class="unick"><?php echo $_smarty_tpl->tpl_vars['v']->value['unick'];?>
</td>
                <td class="uimgurl"><?php echo $_smarty_tpl->tpl_vars['v']->value['uimgurl'];?>
</td>
                <td class="rid"><?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
</td>
                <td>
                    <div class="del">删除</div>
                    <a class="edit" href="index.php?m=admin&f=user&a=editUserCon&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"+>编辑</a>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </div>
</body>
</html>
<?php echo '<script'; ?>
>
    $("tbody").delegate('.del','click',function () {
        var id=$(this).parents('tr').find('.uid').html();
        $.ajax({
            url:"index.php?m=admin&f=user&a=delUserCon",
            type:"POST",
            data:"uid="+id,
            success:function (text) {
                if(text=="ok"){
                    alert("删除成功");
                    location.href="index.php?m=admin&f=user&a=lookUser";
                }
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
