<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:27:24
  from "D:\wamp\www\fish\template\index\H-defeat.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a29c001c60_05498952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7046a0613ba6507ed60a768b44be2fdd34830537' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\index\\H-defeat.html',
      1 => 1499570842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a29c001c60_05498952 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/H-defeat.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<header>
			<div class="H-htop">
				<a href="javascript:;">
					<img src="<?php echo IMG_PATH;?>
H-back.png" class="back"/>
				</a>			
				<img src="<?php echo IMG_PATH;?>
H-s1.png" class="head"/>
			</div>			
			<div class="H-serach">
				<input type="text" name="serach"/>
				<img src="<?php echo IMG_PATH;?>
H-s2.png"/>
				<img src="<?php echo IMG_PATH;?>
H-s3.png"/>
				<img src="<?php echo IMG_PATH;?>
H-s4.png" class="H-icon"/>
			</div>
		</header>
		
		<div id="wrapper">
			<div id="scroller">
				<div class="H-history">
					<?php if ($_smarty_tpl->tpl_vars['result']->value != '0') {?>
					<p class="result">当前优先搜索结果</p>
					<div></div>
					<div></div>
					<p class="num"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</p>
					<?php } else { ?>
					<img src="<?php echo IMG_PATH;?>
H-defeat.png" alt="">
					<?php }?>
				</div>
				
				<!--新品推荐开始-->
				<div class="H-commend">
					<div class="H-com-top">
						<p>RECOMMENDED</p>
						<p>
							<img src="<?php echo IMG_PATH;?>
H-s5.png"/>
							<span>新品推荐</span>
						</p>
					</div>
					<div class="H-com-list">
						<img src="<?php echo IMG_PATH;?>
H-s6.png"/>
						<img src="<?php echo IMG_PATH;?>
H-s7.png"/>
						<img src="<?php echo IMG_PATH;?>
H-s8.png"/>
						<img src="<?php echo IMG_PATH;?>
H-s9.png"/>
						<img src="<?php echo IMG_PATH;?>
H-s10.png"/>
						<img src="<?php echo IMG_PATH;?>
H-s11.png"/>
					</div>
					<div class="H-com-con">
						<div class="con">
							<div class="con-top">
								<div class="left">
									<img src="<?php echo IMG_PATH;?>
H-s16.png"/>
								</div>
								<div class="right">
									<h3>MINIMALIST</h3>
									<h4>北欧极简风</h4>
									<img src="<?php echo IMG_PATH;?>
H-s17.png"/>
									<p>以简单到极致为追求感官上简约整洁品味更为优雅……</p>
								</div>
							</div>
							<ul class="con-bottom">
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s12.png"/>
									<span>3245</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s13.png"/>
									<span>2342</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s14.png"/>
									<span>4352</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s15.png"/>
									<span>89</span>
								</li>
							</ul>
						</div>
						<div class="con">
							<div class="con-top">
								<div class="left">
									<img src="<?php echo IMG_PATH;?>
H-s16.png"/>
								</div>
								<div class="right">
									<h3>MINIMALIST</h3>
									<h4>北欧极简风</h4>
									<img src="<?php echo IMG_PATH;?>
H-s17.png"/>
									<p>以简单到极致为追求感官上简约整洁品味更为优雅……</p>
								</div>
							</div>
							<ul class="con-bottom">
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s12.png"/>
									<span>3245</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s13.png"/>
									<span>2342</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s14.png"/>
									<span>4352</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s15.png"/>
									<span>89</span>
								</li>
							</ul>
						</div>
						<div class="con">
							<div class="con-top">
								<div class="left">
									<img src="<?php echo IMG_PATH;?>
H-s16.png"/>
								</div>
								<div class="right">
									<h3>MINIMALIST</h3>
									<h4>北欧极简风</h4>
									<img src="<?php echo IMG_PATH;?>
H-s17.png"/>
									<p>以简单到极致为追求感官上简约整洁品味更为优雅……</p>
								</div>
							</div>
							<ul class="con-bottom">
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s12.png"/>
									<span>3245</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s13.png"/>
									<span>2342</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s14.png"/>
									<span>4352</span>
								</li>
								<li>
									<img src="<?php echo IMG_PATH;?>
H-s15.png"/>
									<span>89</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>						
	</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
	var myScroll;
    window.onload=function() {
        myScroll = new IScroll('#wrapper');
    }
<?php echo '</script'; ?>
><?php }
}
