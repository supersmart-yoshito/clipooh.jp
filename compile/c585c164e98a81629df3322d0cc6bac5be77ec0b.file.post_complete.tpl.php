<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-03 21:20:50
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/post_complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629118446560fc22e066487-19628302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c585c164e98a81629df3322d0cc6bac5be77ec0b' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/post_complete.tpl',
      1 => 1443873708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629118446560fc22e066487-19628302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560fc22e0cecb0_25234098',
  'variables' => 
  array (
    'user' => 0,
    'articleId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560fc22e0cecb0_25234098')) {function content_560fc22e0cecb0_25234098($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<a href="/blog/detail/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
/<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">detail</a>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
