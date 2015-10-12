<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-04 15:59:30
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467410184560fd7536bc648-82238495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b5cec7479662e9d195ce1638ad1cdb929f6eaea' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/list.tpl',
      1 => 1443898243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467410184560fd7536bc648-82238495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560fd753715be4_42959787',
  'variables' => 
  array (
    'pager' => 0,
    'page' => 0,
    'articles' => 0,
    'postUser' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560fd753715be4_42959787')) {function content_560fd753715be4_42959787($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pager']->value->getPages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->getLink();?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->getPage();?>
</a></p>
<?php } ?>

<ul>
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
<li><a href="/blog/detail/<?php echo $_smarty_tpl->tpl_vars['postUser']->value->getId();?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
</a></li>
<?php }
if (!$_smarty_tpl->tpl_vars['article']->_loop) {
?>
<li>out of service</li>
<?php } ?>
</ul>


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
