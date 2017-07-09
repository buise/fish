<?php
/* Smarty version 3.1.30, created on 2017-07-08 17:31:10
  from "E:\wamp\www\fish\template\admin\addContent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5960fabef38870_83051736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309dbbc425a155ed67dcf39f96382dfd51e4be7a' => 
    array (
      0 => 'E:\\wamp\\www\\fish\\template\\admin\\addContent.html',
      1 => 1499527272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5960fabef38870_83051736 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加内容</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
</head>
<body>
<!--百度编辑器-->

<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
ueditor.all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>

<form style="width:auto;height:auto;position: static" method="post" action="index.php?m=admin&f=content&a=addContentCon">

    <div class="form-group">
        <label>所属栏目</label>
        <select class="form-control" name="cid">
            <option>选择栏目</option>
            <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

        </select>
    </div>

    <div class="form-group">
        <label>中文标题</label>
        <input type="text" class="form-control" name="cname">
    </div>

    <div class="form-group">
        <label>英文标题</label>
        <input type="text" class="form-control" name="ename">
    </div>


    <div class="form-group">
        <label>关键词</label>
        <input type="text" class="form-control" name="keywords">
    </div>

    <div class="form-group">
        <label>简介</label>
        <input type="text" class="form-control" name="intro">
    </div>

    <div class="form-group">
        <label>价格</label>
        <input type="text" class="form-control" name="price">
    </div>

    <div class="form-group">
        <label>数量</label>
        <input type="text" class="form-control" name="amount">
    </div>

    <!--<div class="form-group">-->
        <!--<label>颜色</label>-->
        <!--<input type="text" class="form-control" name="color">-->
    <!--</div>-->

    <!--内容-->
    <div class="form-group">
        <?php echo '<script'; ?>
 id="editor" type="text/plain" name="content"><?php echo '</script'; ?>
>
    </div>


    <div class="form-group thumb">

        <label>上传图片</label>

        <input type="hidden" name="imgurl">

    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="checkbox" style="margin-left:20px;">
        <input type="checkbox" name="posid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>


    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');

    var obj=new upload();
    obj.uploadBtnStyle.text="上传文件"
    obj.createView({
        parent:document.querySelector(".thumb")
    })
    obj.uploadfile("index.php?m=admin&f=content&a=upload",function (data) {
        document.querySelector("input[name=imgurl]").value=data;
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
