<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-23 01:25:26
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63013035056040d7220fa04-30199194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b7c3f28968f51197fc4316aba401d8da23ed51' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/common/header.tpl',
      1 => 1445531125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63013035056040d7220fa04-30199194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56040d722135a1_44057768',
  'variables' => 
  array (
    'pageTitle' => 0,
    'isPc' => 0,
    'isSp' => 0,
    'add_css' => 0,
    'css' => 0,
    'item' => 0,
    'add_js' => 0,
    'js' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56040d722135a1_44057768')) {function content_56040d722135a1_44057768($_smarty_tpl) {?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<?php if ($_smarty_tpl->tpl_vars['isPc']->value) {?>
<link rel="stylesheet" href="/css/common.css">
<?php } elseif ($_smarty_tpl->tpl_vars['isSp']->value) {?>
<link rel="stylesheet" href="/css/common.sp.css">
<link rel="stylesheet" href="/css/style.sp.css">
<?php } else { ?>
<link rel="stylesheet" href="/css/common.css">
<?php }?>
<link rel="stylesheet" href="/css/slick.css">
<link rel="stylesheet" href="/css/slick-theme.css">
<!--
-->

<?php if ($_smarty_tpl->tpl_vars['add_css']->value) {?>
<?php $_smarty_tpl->tpl_vars["css"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['add_css']->value), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<link rel="stylesheet" href="/css/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" type="text/css" />
<?php } ?>
<?php }?>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="/js/slick.min.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['add_js']->value) {?>
<?php $_smarty_tpl->tpl_vars["js"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['add_js']->value), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<?php echo '<script'; ?>
 src="/js/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" type="text/javascript" ><?php echo '</script'; ?>
>
<?php } ?>
<?php }?>

</head>
<body>
<header>
<nav>
<ul class="none-list">
<li><a href="/"><img src="http://placehold.jp/200x100.png?text=logo" /></a></li>
<?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
<li><a href="/user/join"><img src="http://placehold.jp/c0c000/000000/200x100.png?text=signin" /></a></li>
<li><a href="/user/login?r=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"><img src="http://placehold.jp/00c0c0/000000/200x100.png?text=login" /></a></li>
<?php } else { ?>
<li><a href="/user/mypage"><img src="http://placehold.jp/c0c000/000000/200x100.png?text=mypage" /></a></li>
<li><a href="/user/message"><img src="http://placehold.jp/00c0c0/000000/200x100.png?text=mail" /></a></li>
<?php }?>
<li><a href="#"><img src="http://placehold.jp/c000c0/000000/200x100.png?text=menu" /></a></li>
</ul>
</nav>
</header>
<div id="container" class="clearfix">
<?php }} ?>
