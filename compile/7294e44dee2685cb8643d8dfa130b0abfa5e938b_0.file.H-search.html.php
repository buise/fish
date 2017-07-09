<?php
/* Smarty version 3.1.30, created on 2017-07-09 06:09:27
  from "D:\wamp\www\fish\template\index\H-search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961ac77dfd4e8_73750213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7294e44dee2685cb8643d8dfa130b0abfa5e938b' => 
    array (
      0 => 'D:\\wamp\\www\\fish\\template\\index\\H-search.html',
      1 => 1499573365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961ac77dfd4e8_73750213 (Smarty_Internal_Template $_smarty_tpl) {
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
		<title>搜索</title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/H-search.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
angular.js"><?php echo '</script'; ?>
>
	</head>
	<body ng-app="app">
		<div class="H-process" ng-controller="ctrl">
			<form class="H-search" action="index.php?m=index&f=search&a=result" method="post">
				<input type="text" name="search" class="search"/>
				<img src="<?php echo IMG_PATH;?>
H-s18.png" class="none"/>
				<img src="<?php echo IMG_PATH;?>
H-s3.png"/>
				<input type="submit" class="submit"/>
				<img src="<?php echo IMG_PATH;?>
H-s4.png" class="H-icon"/>
			</form>
			<ul class="H-list" >
				<li>
					<div class="H-list-left">
						<img src="<?php echo IMG_PATH;?>
H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>欧洲实木</span><span class="furniture">家具</span>
						<img class="phone" src="<?php echo IMG_PATH;?>
H-s20.png"/>
						<img class="line" src="<?php echo IMG_PATH;?>
H-s21.png"/>
						<p>SOLID WOOD FURNITURE IN EUROPE</p>
					</div>
				</li>
				<li>
					<div class="H-list-left">
						<img src="<?php echo IMG_PATH;?>
H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>新中式</span><span class="furniture">家具</span>
						<img class="phone" src="<?php echo IMG_PATH;?>
H-s20.png"/>
						<img class="line" src="<?php echo IMG_PATH;?>
H-s21.png"/>
						<p>NEW CHINESE STYLE FURNITURE</p>
					</div>
				</li>
				<li>
					<div class="H-list-left">
						<img src="<?php echo IMG_PATH;?>
H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>大果紫檀</span><span class="furniture">家具</span>
						<img class="phone" src="<?php echo IMG_PATH;?>
H-s20.png"/>
						<img class="line" src="<?php echo IMG_PATH;?>
H-s21.png"/>
						<p>FRUIT RED SANDALWOOD FURNITURE</p>
					</div>
				</li>
				<li>
					<div class="H-list-left">
						<img src="<?php echo IMG_PATH;?>
H-s19.png"/>
					</div>
					<div class="H-list-right">
						<span>美式</span><span class="furniture">家具</span>
						<img class="phone" src="<?php echo IMG_PATH;?>
H-s20.png"/>
						<img class="line" src="<?php echo IMG_PATH;?>
H-s21.png"/>
						<p>AMERICAN FURNITURE TIDE</p>
					</div>
				</li>
			</ul>
		</div>

		<?php echo '<script'; ?>
>
			$('.search').focus(function () {
				$('.none').css({
					'display':'none'
				});
            })

			angular.module('app',[]).controller('ctrl',function ($scope, $http) {
                $http({
                    method: 'GET',
                    url: 'index.php?m=index&f=search&a=result'
                }).then(function successCallback(response) {
                    console.log(response.$result)
//                    $scope.names = response.data;
                }, function errorCallback(response) {
                    console.log(123);
                });
            })
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
