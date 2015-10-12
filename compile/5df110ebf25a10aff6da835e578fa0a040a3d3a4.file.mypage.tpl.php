<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-06 00:24:58
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/mypage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:884855215608093bbd71a5-09674968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5df110ebf25a10aff6da835e578fa0a040a3d3a4' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/mypage.tpl',
      1 => 1443452203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884855215608093bbd71a5-09674968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5608093bc3f404_26026279',
  'variables' => 
  array (
    'lang' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5608093bc3f404_26026279')) {function content_5608093bc3f404_26026279($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>mypage</h1>
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
