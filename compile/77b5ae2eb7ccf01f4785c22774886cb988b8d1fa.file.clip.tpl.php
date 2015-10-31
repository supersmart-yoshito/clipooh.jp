<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-30 00:32:05
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/mb/monoclip/clip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054625860562fa13860c111-72894964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b5ae2eb7ccf01f4785c22774886cb988b8d1fa' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/mb/monoclip/clip.tpl',
      1 => 1446047013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1054625860562fa13860c111-72894964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_562fa1386b3693_61853470',
  'variables' => 
  array (
    'user' => 0,
    'monoclip' => 0,
    'clips' => 0,
    'clip' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562fa1386b3693_61853470')) {function content_562fa1386b3693_61853470($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php echo '<script'; ?>
>

$(function (){

	$('img').on('load', function() {

		if ($(this).width() > $(this).height()) {
			$(this).addClass('max-height') ;
		} else {
			$(this).addClass('max-width') ;
		}

	}) ;
}) ;

<?php echo '</script'; ?>
>


<section>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>

<p class="photo-clip-tltle"><?php echo $_smarty_tpl->tpl_vars['monoclip']->value->getTitle();?>
</p>
<p class="photo-clip-tltle"><?php echo $_smarty_tpl->tpl_vars['monoclip']->value->getTitle();?>
</p>
<p class="photo-clip-tltle"><?php echo $_smarty_tpl->tpl_vars['monoclip']->value->getTitle();?>
</p>
<ul id="photo-clip">
<?php  $_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->key => $_smarty_tpl->tpl_vars['clip']->value) {
$_smarty_tpl->tpl_vars['clip']->_loop = true;
?>
  <li><a href="/monoclip/imageapi/<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
"><img src="/monoclip/imageapi/<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
" /></a></li>
<?php }
if (!$_smarty_tpl->tpl_vars['clip']->_loop) {
?>
  <li></li>
<?php } ?>
</ul>
<?php } else { ?>
<li><a href="/user/login?r=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログイン');?>
</a></li>
<?php }?>
</section>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
