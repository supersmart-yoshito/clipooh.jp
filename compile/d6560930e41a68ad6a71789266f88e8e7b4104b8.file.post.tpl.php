<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-04 00:30:23
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30491053560f9221f31982-08550382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6560930e41a68ad6a71789266f88e8e7b4104b8' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/post.tpl',
      1 => 1443883134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30491053560f9221f31982-08550382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560f92220abc00_69598749',
  'variables' => 
  array (
    'lang' => 0,
    'title' => 0,
    'body' => 0,
    'publish' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560f92220abc00_69598749')) {function content_560f92220abc00_69598749($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form action="" method="post">

<table>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('タイトル');?>
</th><td><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></td></tr>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('記事');?>
</th><td><textarea name="body"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea></td></tr>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('公開設定');?>
</th>
<td>
<input type="radio" name="publish" value="0" <?php if (empty($_smarty_tpl->tpl_vars['publish']->value)) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('全体に公開');?>

<input type="radio" name="publish" value="1" <?php if ($_smarty_tpl->tpl_vars['publish']->value===1) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('友達に公開');?>

<input type="radio" name="publish" value="2" <?php if ($_smarty_tpl->tpl_vars['publish']->value===2) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブループに公開');?>

<input type="radio" name="publish" value="3" <?php if ($_smarty_tpl->tpl_vars['publish']->value===3) {?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('非公開');?>

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
