<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-27 23:55:53
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:857432205560417a4ef8bb0-64158350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '485964f58b071d4fe0e6bd3ac69615761775bbe2' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/index.tpl',
      1 => 1443365740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '857432205560417a4ef8bb0-64158350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560417a4f29045_32806485',
  'variables' => 
  array (
    'lang' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560417a4f29045_32806485')) {function content_560417a4f29045_32806485($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
