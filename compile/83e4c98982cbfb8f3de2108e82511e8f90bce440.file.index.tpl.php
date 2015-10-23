<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-18 23:15:59
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2377714085602b949244e53-93425358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e4c98982cbfb8f3de2108e82511e8f90bce440' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/index.tpl',
      1 => 1445176982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2377714085602b949244e53-93425358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5602b949280b23_23353504',
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602b949280b23_23353504')) {function content_5602b949280b23_23353504($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li><?php echo $_smarty_tpl->tpl_vars['item']->value->getSessionId();?>
</li>
<?php } ?>
</ul>

<iframe width="560" height="315" src="https://www.youtube.com/embed/7hVYEJA91Pg" frameborder="0" allowfullscreen></iframe>


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
