<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-27 21:05:28
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/join_complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15888156785607c1014a9521-58518721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e75dbdce9bc9d75acf7e311cd49136d1f0d28f' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/join_complete.tpl',
      1 => 1443355520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15888156785607c1014a9521-58518721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5607c1014e1f67_22950608',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5607c1014e1f67_22950608')) {function content_5607c1014e1f67_22950608($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<p>complete</p>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">mypage</a>


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
