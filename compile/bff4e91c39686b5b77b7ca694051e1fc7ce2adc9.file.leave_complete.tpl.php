<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-27 23:45:13
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/leave_complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111548511560800f923d834-68619229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff4e91c39686b5b77b7ca694051e1fc7ce2adc9' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/leave_complete.tpl',
      1 => 1443364260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111548511560800f923d834-68619229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560800f9280d63_16877173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560800f9280d63_16877173')) {function content_560800f9280d63_16877173($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ご利用ありがとうございました');?>
</p>
<a href="/user">TOP</a>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
