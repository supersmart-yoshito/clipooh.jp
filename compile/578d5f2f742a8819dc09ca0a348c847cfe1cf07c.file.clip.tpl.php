<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-11 20:50:34
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/monoclip/clip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090583936561a47493d25c4-88021824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '578d5f2f742a8819dc09ca0a348c847cfe1cf07c' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/monoclip/clip.tpl',
      1 => 1444563200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090583936561a47493d25c4-88021824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561a4749446b65_04459667',
  'variables' => 
  array (
    'user' => 0,
    'clips' => 0,
    'clip' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a4749446b65_04459667')) {function content_561a4749446b65_04459667($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>


<p>clip</p>

<div>
</div>

<ul>
<?php  $_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->key => $_smarty_tpl->tpl_vars['clip']->value) {
$_smarty_tpl->tpl_vars['clip']->_loop = true;
?>
<li><div>
<img width="100" src="/monoclip/imageapi/<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
" />
</div></li>
<?php } ?>
</ul>


<?php } else { ?>
<li><a href="/user/login?r=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログイン');?>
</a></li>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
