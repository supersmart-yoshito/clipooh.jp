<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-06 01:36:05
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1058832270560fcf7f110326-24755359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f45df609c7c1eb8b40da2a614e26e27246147cb' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/detail.tpl',
      1 => 1444062962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1058832270560fcf7f110326-24755359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560fcf7f164d70_42208393',
  'variables' => 
  array (
    'article' => 0,
    'lang' => 0,
    'name' => 0,
    'body' => 0,
    'comments' => 0,
    'comment' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560fcf7f164d70_42208393')) {function content_560fcf7f164d70_42208393($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ul>
<li><a href="/blog">top</a></li>
<li></li>
</ul>
<p><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['article']->value->getBody();?>
</p>



<form action="" method="post">

<table>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('名前');?>
</th><td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td></tr>
<tr><th><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('コメント');?>
</th><td><textarea name="body"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea></td></tr>
</table>

<ul>
<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
<li>
<p><?php echo $_smarty_tpl->tpl_vars['comment']->value->getName();?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['comment']->value->getBody();?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['comment']->value->getCreated();?>
</p>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['comment']->_loop) {
?>
<li></li>
<?php } ?>
</ul>

<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('コメントする');?>
" />
<input type="hidden" name="comment" value="1" />
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>



<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
