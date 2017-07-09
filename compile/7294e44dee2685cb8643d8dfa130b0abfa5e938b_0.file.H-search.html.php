<?php
/* Smarty version 3.1.30, created on 2017-07-08 18:45:20
  from "D:\wamp\www\fish\template\index\H-search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59610c20c7ef86_64548549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7294e44dee2685cb8643d8dfa130b0abfa5e938b' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\index\\H-search.html',
      1 => 1499532319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59610c20c7ef86_64548549 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	    <meta name="x5-orientation" content="portrait | landscape" />
	    <meta name="screen-orientation" content="portrait">
	    <meta name="x5-fullscreen" content="true" />
	    <meta name="full-screen" content="yes">
	    <meta name="format-detection" content="telephone=no, email=no" />
		<title>搜索完成</title>
		<link rel="stylesheet" href="../../static/css/common.css" />
		<link rel="stylesheet" href="../../static/css/index/H-search.css" />
		<?php echo '<script'; ?>
 src="../../static/js/rem.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../static/js/iscroll.js"><?php echo '</script'; ?>
>
	</head>
	<body>	
		<div class="H-process">	
			<form class="H-serach" action=MODULE_PATH."/index.search.class.php" method="post">
				<input type="text" name="serach"/>
				<img src="../../static/img/H-s18.png"/>
				<img src="../../static/img/H-s3.png"/>
				<input type="submit" class="submit"/>
				<img src="../../static/img/H-s4.png" class="H-icon"/>
			</form>
			<ul class="H-list">
				<li>
					<div class="H-list-left">
						<img src="../../static/img/H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>欧洲实木</span><span class="furniture">家具</span>
						<img class="phone" src="../../static/img/H-s20.png"/>
						<img class="line" src="../../static/img/H-s21.png"/>
						<p>SOLID WOOD FURNITURE IN EUROPE</p>
					</div>
				</li>
				<li>
					<div class="H-list-left">
						<img src="../../static/img/H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>新中式</span><span class="furniture">家具</span>
						<img class="phone" src="../../static/img/H-s20.png"/>
						<img class="line" src="../../static/img/H-s21.png"/>
						<p>NEW CHINESE STYLE FURNITURE</p>
					</div>
				</li>
				<li>
					<div class="H-list-left">
						<img src="../../static/img/H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>大果紫檀</span><span class="furniture">家具</span>
						<img class="phone" src="../../static/img/H-s20.png"/>
						<img class="line" src="../../static/img/H-s21.png"/>
						<p>FRUIT RED SANDALWOOD FURNITURE</p>
					</div>
				</li>
				<li>
					<div class="H-list-left">
						<img src="../../static/img/H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>美式</span><span class="furniture">家具</span>
						<img class="phone" src="../../static/img/H-s20.png"/>
						<img class="line" src="../../static/img/H-s21.png"/>
						<p>AMERICAN FURNITURE TIDE</p>
					</div>
				</li>
			</ul>
		</div>
	</body>
</html><?php }
}
