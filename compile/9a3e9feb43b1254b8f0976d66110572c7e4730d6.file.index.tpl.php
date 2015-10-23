<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-20 01:25:09
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/mb/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18134825245625196592f5c9-45811855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a3e9feb43b1254b8f0976d66110572c7e4730d6' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/mb/user/index.tpl',
      1 => 1445271410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18134825245625196592f5c9-45811855',
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
  'unifunc' => 'content_562519659911c4_84583775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562519659911c4_84583775')) {function content_562519659911c4_84583775($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
