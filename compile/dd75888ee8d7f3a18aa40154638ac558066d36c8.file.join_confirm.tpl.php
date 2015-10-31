<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-24 03:38:44
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/mb/user/join_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:588316680562a7eb4b03154-17374409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd75888ee8d7f3a18aa40154638ac558066d36c8' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/mb/user/join_confirm.tpl',
      1 => 1445271410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588316680562a7eb4b03154-17374409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_id' => 0,
    'user_pass' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_562a7eb4b98622_29138008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562a7eb4b98622_29138008')) {function content_562a7eb4b98622_29138008($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<p>confirm</p>
<form action="" method="post">
<table>
<tr><td><input type="text" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" placeholder="id"/></td></tr>
<tr><td><input type="text" name="user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
" placeholder="pass"/></td></tr>
</table>
<input type="submit" value="submit" />
<input type="hidden" name="confirm" value="1" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
