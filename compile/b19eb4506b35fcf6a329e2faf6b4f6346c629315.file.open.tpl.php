<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-12 20:43:58
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/monoclip/open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13600300405613f4945f42d4-98033290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19eb4506b35fcf6a329e2faf6b4f6346c629315' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/monoclip/open.tpl',
      1 => 1444581495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13600300405613f4945f42d4-98033290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5613f49467ed66_75241622',
  'variables' => 
  array (
    'title' => 0,
    'lang' => 0,
    'type' => 0,
    'publish' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613f49467ed66_75241622')) {function content_5613f49467ed66_75241622($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form action="" method="post">
<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />

<table>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('クリップ');?>
</th></tr>
<tr><td>
<input type="radio" name="type" value="0" <?php if (empty($_smarty_tpl->tpl_vars['type']->value)) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('Photos');?>


<input type="radio" name="type" value="3" <?php if ($_smarty_tpl->tpl_vars['type']->value==3) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('Memos');?>

</td></tr>

<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('公開設定');?>
</th></tr>
<tr><td>
<input type="radio" name="publish" value="0" <?php if (empty($_smarty_tpl->tpl_vars['publish']->value)) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('全体に公開');?>

<input type="radio" name="publish" value="1" <?php if ($_smarty_tpl->tpl_vars['publish']->value==1) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('友達に公開');?>

<input type="radio" name="publish" value="2" <?php if ($_smarty_tpl->tpl_vars['publish']->value==2) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブループに公開');?>

<input type="radio" name="publish" value="3" <?php if ($_smarty_tpl->tpl_vars['publish']->value==3) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('非公開');?>

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
