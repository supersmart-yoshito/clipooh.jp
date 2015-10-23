<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-20 01:25:22
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/mb/user/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4140645575625177431ea51-14117263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c74dd9bca41a15611f1c92e99e54c88b2f99e5' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/mb/user/login.tpl',
      1 => 1445271881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4140645575625177431ea51-14117263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56251774378ab0_63244828',
  'variables' => 
  array (
    'error' => 0,
    'user_id' => 0,
    'lang' => 0,
    'user_pass' => 0,
    'r' => 0,
    '__time' => 0,
    '__token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56251774378ab0_63244828')) {function content_56251774378ab0_63244828($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
<p>error</p>
<?php }?>

<div class="center"> 
<form action="" method="post">
<input type="text" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログインID');?>
"/>
<input type="text" name="user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('パスワード');?>
"/>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログイン');?>
" />
<?php if ($_smarty_tpl->tpl_vars['r']->value) {?>
<input type="hidden" name="r" value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
" />
<?php }?>
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>
</div>


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
