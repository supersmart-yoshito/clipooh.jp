<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-13 00:25:17
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/monoclip/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17544058665613ef36de4279-51242437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2350ea256cc189dad491f4319f07e35ab56e34' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/monoclip/index.tpl',
      1 => 1444663502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17544058665613ef36de4279-51242437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5613ef36e5ffe3_86053716',
  'variables' => 
  array (
    'user' => 0,
    'lang' => 0,
    'shareclips' => 0,
    'clip' => 0,
    'shareclipImages' => 0,
    '__time' => 0,
    '__token' => 0,
    'imageclips' => 0,
    'imageclipImages' => 0,
    'memoclips' => 0,
    'memoclipMemos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613ef36e5ffe3_86053716')) {function content_5613ef36e5ffe3_86053716($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 src="/js/clip_post.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/image_post.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/memo_post.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/image_slider.js"><?php echo '</script'; ?>
>



<p>monoclip</p>

<?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
<a href="/user/login?r=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ログイン');?>
</a>
<?php }?>


<!--
 -
 - メニュー
 -
 -->
<section id="menu">
<ul id="menu-list">
<li><a href="#image-clips">Photos</a></li>
<li><a href="#memo-clips">Memos</a></li>

</ul><!-- #menu-list -->
</section><!-- #menu -->



<!--
 -
 - シェアクリップ
 -
 -->

<section id="contents">
<?php if (!$_smarty_tpl->tpl_vars['shareclips']->value) {?>

<?php } else { ?>
<div class="image_slider" style="height: 200px;">
<?php  $_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shareclips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clip']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->key => $_smarty_tpl->tpl_vars['clip']->value) {
$_smarty_tpl->tpl_vars['clip']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clip']['index']++;
?>
<div>
    <!-- クリップ画像表示 -->
    <a href="/monoclip/clip/<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
">
    <figure id="figure-<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
">
    <figcaption><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert($_smarty_tpl->tpl_vars['clip']->value->getTitle());?>
</figcaption>
<?php if ($_smarty_tpl->tpl_vars['shareclipImages']->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['clip']['index']]) {?>
    <img src="/monoclip/imageapi/<?php echo $_smarty_tpl->tpl_vars['shareclipImages']->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['clip']['index']]->getId();?>
" width="100" />
<?php } else { ?>
    <img src="http://placehold.jp/100x100.png" width="100" />
<?php }?>
    </figure>
    </a>
</div>
<?php } ?>
</div><!-- slider -->
<?php }?>


<!--
 -
 - 個人クリップ
 -
 -->
<p><a href="/monoclip/open"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('クリップを追加');?>
</a></p>

<form id="clip-post" action="/monoclip/post" method="post">
<div>
<select name="type">
<option value="0" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('写真');?>
</option>
<option value="3" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('メモ');?>
</option>
</select>
</div>
<div>
<label>タイトル</label>
<input type="text" name="title" value="" />
</div>
<div>
<select name="publish">
<option value="0" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('全体に公開');?>
</option>
<option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('友達に公開');?>
</option>
<option value="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('ブループに公開');?>
</option>
<option value="3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('非公開');?>
</option>
</select>
<a href="#" class="button">クリップを追加</a>
</div>
<input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
<input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
</form>

<div id="image-clips">
<ul>
<!-- 画像のクリップフォーム -->
<?php  $_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imageclips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->key => $_smarty_tpl->tpl_vars['clip']->value) {
$_smarty_tpl->tpl_vars['clip']->_loop = true;
?>
<li>
    <!-- クリップ画像表示 -->
    <a href="/monoclip/clip/<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
">
    <figure id="figure-<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
">
        <figcaption><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert($_smarty_tpl->tpl_vars['clip']->value->getTitle());?>
</figcaption>
<?php if ($_smarty_tpl->tpl_vars['imageclipImages']->value[$_smarty_tpl->tpl_vars['clip']->value->getId()]) {?>
        <img id="upload<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
" src="/monoclip/imageapi/<?php echo $_smarty_tpl->tpl_vars['imageclipImages']->value[$_smarty_tpl->tpl_vars['clip']->value->getId()]->getId();?>
" width="100" />
<?php } else { ?>
        <img id="upload<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
" src="http://placehold.jp/100x100.png" width="100" />
<?php }?>
    </figure>
    </a>

    <!-- 画像のクリップフォーム -->
    <form class="image_uploader" data-image-id="<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
" action="/monoclip/update/<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
" method="post" enctype="multipart/form-data">
    <input type="file" name="clip" accept="image/*;capture=camera" style="display: none;"/>
    <a class="image-select button" href="#">選択</a>
    <a class="image-clip button" href="#">クリップ</a>
    <input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
    <input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
    </form>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['clip']->_loop) {
?>
<li></li>
<?php } ?>
</ul>
</div><!-- div#image-clips -->

<div id="memo-clips">
<ul>
<?php  $_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memoclips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->key => $_smarty_tpl->tpl_vars['clip']->value) {
$_smarty_tpl->tpl_vars['clip']->_loop = true;
?>
<li>
    <!-- メモのクリップフォーム -->
    <form class="memo_uploader" action="/monoclip/update/<?php echo $_smarty_tpl->tpl_vars['clip']->value->getId();?>
" method="post">
    <p><?php echo $_smarty_tpl->tpl_vars['clip']->value->getTitle();?>
</p>
<?php if ($_smarty_tpl->tpl_vars['memoclipMemos']->value[$_smarty_tpl->tpl_vars['clip']->value->getId()]) {?>
    <div class="memo"><?php echo nl2br($_smarty_tpl->tpl_vars['memoclipMemos']->value[$_smarty_tpl->tpl_vars['clip']->value->getId()]->getText());?>
</div>
    <textarea name="text" class="memo" style="display: none;"><?php echo nl2br($_smarty_tpl->tpl_vars['memoclipMemos']->value[$_smarty_tpl->tpl_vars['clip']->value->getId()]->getText());?>
</textarea>
<?php } else { ?>
    <div class="memo">aaa</div>
    <textarea name="text" class="memo" style="display: none;">aaa</textarea>
<?php }?>
    <input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
    <input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
    </form>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['clip']->_loop) {
?>
<li>
</li>
<?php } ?>
</ul>

<!--

-->
</div><!-- div#memo-clip -->
</section><!-- #contents -->

<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
