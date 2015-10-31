<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-24 03:38:48
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/mb/user/join_complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418258778562a7eb863ed34-07401982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9e869c488f1b256a2e049d40197c7b13fc34fc' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/mb/user/join_complete.tpl',
      1 => 1445271410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418258778562a7eb863ed34-07401982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_562a7eb86a0ba5_11634836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562a7eb86a0ba5_11634836')) {function content_562a7eb86a0ba5_11634836($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<p>complete</p>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">mypage</a>


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
