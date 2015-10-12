<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-27 23:41:06
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/leave.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100101398256080002aacb89-42028624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dec3ce8a562bbcc588510a4f374e041567a1dcad' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/leave.tpl',
      1 => 1443364808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100101398256080002aacb89-42028624',
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
  'unifunc' => 'content_56080002af1716_53589227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56080002af1716_53589227')) {function content_56080002af1716_53589227($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p>description</p>
<form action="" method="post">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('確認');?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
