<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-27 23:45:07
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/leave_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:976257608560800f313ac68-10205588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41eb53cfcdd341b61d72be03acf9e62b68463304' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/leave_confirm.tpl',
      1 => 1443364231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '976257608560800f313ac68-10205588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'id' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560800f3186e26_61614649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560800f3186e26_61614649')) {function content_560800f3186e26_61614649($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p>confirm</p>
<form action="" method="post">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('退会');?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input type="hidden" name="confirm" value="1" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
