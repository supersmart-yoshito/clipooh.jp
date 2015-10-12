<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-03 02:28:29
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2012410754560c0c32db1276-40244275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae7ef640c9b90703890ca3842d388748b4b7ff9' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/open.tpl',
      1 => 1443805756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2012410754560c0c32db1276-40244275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560c0c32e07929_13506025',
  'variables' => 
  array (
    'name' => 0,
    'lang' => 0,
    'publish' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560c0c32e07929_13506025')) {function content_560c0c32e07929_13506025($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form action="" method="post">
<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />

<table>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('公開設定');?>
</th></tr>
<tr><td>
<input type="radio" name="publish" value="1" <?php if ($_smarty_tpl->tpl_vars['publish']->value||$_smarty_tpl->tpl_vars['publish']->value==1) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('全体に公開');?>

<input type="radio" name="publish" value="2" <?php if ($_smarty_tpl->tpl_vars['publish']->value==2) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('友達に公開');?>

<input type="radio" name="publish" value="3" <?php if ($_smarty_tpl->tpl_vars['publish']->value==3) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブループに公開');?>

<input type="radio" name="publish" value="0" <?php if ($_smarty_tpl->tpl_vars['publish']->value==0) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('非公開');?>

</td></tr>
</table>

<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('確認する');?>
" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
