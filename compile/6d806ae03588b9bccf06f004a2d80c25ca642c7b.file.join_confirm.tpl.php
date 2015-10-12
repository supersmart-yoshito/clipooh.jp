<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-27 19:10:59
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/join_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9960026675607c09dc48251-62308046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d806ae03588b9bccf06f004a2d80c25ca642c7b' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/join_confirm.tpl',
      1 => 1443348658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9960026675607c09dc48251-62308046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5607c09dc94e92_04183857',
  'variables' => 
  array (
    'user_id' => 0,
    'user_pass' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5607c09dc94e92_04183857')) {function content_5607c09dc94e92_04183857($_smarty_tpl) {?>
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
