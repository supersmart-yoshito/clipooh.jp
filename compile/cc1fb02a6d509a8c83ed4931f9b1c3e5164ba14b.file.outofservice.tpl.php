<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-04 03:49:17
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/outofservice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14134560485610232d3da7a3-47299208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1fb02a6d509a8c83ed4931f9b1c3e5164ba14b' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/outofservice.tpl',
      1 => 1443897913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14134560485610232d3da7a3-47299208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5610232d43ce83_52421555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5610232d43ce83_52421555')) {function content_5610232d43ce83_52421555($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('存在しないブログです');?>

<a href="/blog">top</a>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
