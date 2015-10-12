<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-03 02:27:56
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/open_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1919149920560c1483d81023-32861859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9853e84a821b812c2fad9067567273e14b4e5e8e' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/open_confirm.tpl',
      1 => 1443805781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1919149920560c1483d81023-32861859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560c1483dfe2c1_31311085',
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
<?php if ($_valid && !is_callable('content_560c1483dfe2c1_31311085')) {function content_560c1483dfe2c1_31311085($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form action="" method="post">

<p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
<table>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('公開設定');?>
</th></tr>
<tr><td>
<?php if ($_smarty_tpl->tpl_vars['publish']->value==1) {?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('全体に公開');?>

<?php } elseif ($_smarty_tpl->tpl_vars['publish']->value==2) {?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('友達に公開');?>

<?php } elseif ($_smarty_tpl->tpl_vars['publish']->value==3) {?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブループに公開');?>

<?php } else { ?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('非公開');?>

<?php }?>
</td></tr>
</table>

<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('開設する');?>
" />
<input type="hidden" name="confirm" value="1" />
<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
<input type="hidden" name="publish" value="<?php echo $_smarty_tpl->tpl_vars['publish']->value;?>
" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>
<form action="" method="post">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('修正する');?>
" />
<input type="hidden" name="cancel" value="1" />
<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
<input type="hidden" name="publish" value="<?php echo $_smarty_tpl->tpl_vars['publish']->value;?>
" />
<input type="hidden" name="confirm" value="1" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
