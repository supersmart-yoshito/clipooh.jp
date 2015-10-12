<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-04 04:44:03
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/blog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45527729556096877dc07c9-27601013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08cca3ac3a680106016d16498ab65ea10f17fd39' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/blog/index.tpl',
      1 => 1443901328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45527729556096877dc07c9-27601013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56096877e50461_70119668',
  'variables' => 
  array (
    'user' => 0,
    'myblog' => 0,
    'lang' => 0,
    'usersArticle' => 0,
    'userArticle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56096877e50461_70119668')) {function content_56096877e50461_70119668($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ul>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['myblog']->value) {?>
<li><a href="/blog/edit"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブログ編集');?>
</a></li>
<li><a href="/blog/post"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブログ投稿');?>
</a></li>
<?php } else { ?>
<li><a href="/blog/open"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブログ開設');?>
</a></li>
<?php }?>
<?php } else { ?>
<li><a href="/user/login?r=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログイン');?>
</a></li>
<?php }?>


<?php  $_smarty_tpl->tpl_vars['userArticle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userArticle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersArticle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userArticle']->key => $_smarty_tpl->tpl_vars['userArticle']->value) {
$_smarty_tpl->tpl_vars['userArticle']->_loop = true;
?>
<li><a href="/blog/detail/<?php echo $_smarty_tpl->tpl_vars['userArticle']->value->getUserId();?>
/<?php echo $_smarty_tpl->tpl_vars['userArticle']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['userArticle']->value->getTitle();?>
</a></li>
<?php } ?>
</ul>



<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
