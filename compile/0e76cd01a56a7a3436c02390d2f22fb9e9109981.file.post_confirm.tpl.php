<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-04 15:58:26
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/post_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1559803076560f9360d2fca4-56772880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e76cd01a56a7a3436c02390d2f22fb9e9109981' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/post_confirm.tpl',
      1 => 1443883156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1559803076560f9360d2fca4-56772880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560f9360de8ff6_56080516',
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
<?php if ($_valid && !is_callable('content_560f9360de8ff6_56080516')) {function content_560f9360de8ff6_56080516($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form action="" method="post">

<table>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('タイトル');?>
</th><td>
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</td></tr>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('記事');?>
</th><td>
<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

</td></tr>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('公開設定');?>
</th></tr>
<tr><td>
<?php if ($_smarty_tpl->tpl_vars['publish']->value==0) {?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('全体に公開');?>

<?php } elseif ($_smarty_tpl->tpl_vars['publish']->value==1) {?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('友達に公開');?>

<?php } elseif ($_smarty_tpl->tpl_vars['publish']->value==2) {?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブループに公開');?>

<?php } else { ?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('非公開');?>

<?php }?>
</td></tr>
</table>

<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('投稿する');?>
" />
<input type="hidden" name="confirm" value="1" />
<input type="hidden" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
<input type="hidden" name="publish" value="<?php echo $_smarty_tpl->tpl_vars['publish']->value;?>
" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
<textarea name="body" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea>
</form>
<form action="" method="post">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('キャンセル');?>
" />
<input type="hidden" name="cancel" value="1" />
<input type="hidden" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
<input type="hidden" name="publish" value="<?php echo $_smarty_tpl->tpl_vars['publish']->value;?>
" />
<input type="hidden" name="confirm" value="1" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
<textarea name="body" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea>
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
