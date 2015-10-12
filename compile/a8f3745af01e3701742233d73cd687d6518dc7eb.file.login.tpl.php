<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-01 01:40:50
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/user/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13294771595607e5ebb4ad45-37557144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f3745af01e3701742233d73cd687d6518dc7eb' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/user/login.tpl',
      1 => 1443630977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13294771595607e5ebb4ad45-37557144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5607e5ebbcbf92_04437777',
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
<?php if ($_valid && !is_callable('content_5607e5ebbcbf92_04437777')) {function content_5607e5ebbcbf92_04437777($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
<p>error</p>
<?php }?>

<form action="" method="post">
<table>
<tr><td><input type="text" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログインID');?>
"/></td></tr>
<tr><td><input type="text" name="user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('パスワード');?>
"/></td></tr>
</table>
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


<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
