<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-20 01:51:21
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/mb/user/join.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128491694056251f89969fd0-85232038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab6b634002cf46d28cb8a675ad5d174bed998dba' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/mb/user/join.tpl',
      1 => 1445271410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128491694056251f89969fd0-85232038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'user_id' => 0,
    'user_pass' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56251f89a0a4f9_05717856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56251f89a0a4f9_05717856')) {function content_56251f89a0a4f9_05717856($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
<p>error</p>
<?php }?>

<form action="" method="post">
<table>
<tr><td><input type="text" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" placeholder="id"/></td></tr>
<tr><td><input type="text" name="user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
" placeholder="pass"/></td></tr>
</table>
<input type="submit" value="submit" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
