<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-28 00:23:58
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/userpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42243165756080a0e7046e6-59405232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f13e180ecbd2bd6feaf84a696e96685c5fc6b2' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/userpage.tpl',
      1 => 1443367120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42243165756080a0e7046e6-59405232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56080a0e7a33f0_85471042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56080a0e7a33f0_85471042')) {function content_56080a0e7a33f0_85471042($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>user</h1>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('index');?>

<ul>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
<li><a href="/user/logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログアウト');?>
</a></li>
<li><a href="/user/leave/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('退会');?>
</a></li>
<?php } else { ?>
<li><a href="/user/login"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログイン');?>
</a></li>
<li><a href="/user/join"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('登録');?>
</a></li>
<?php }?>
</ul>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
