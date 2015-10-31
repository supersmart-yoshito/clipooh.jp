<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-31 21:02:31
         compiled from "/Users/yosito_sato/Sites/test.localhost/views/mb/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4922355905623a6459ae4e9-82042643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca393ad8734e48bd235f1aa4aac131d37d7966f9' => 
    array (
      0 => '/Users/yosito_sato/Sites/test.localhost/views/mb/index.tpl',
      1 => 1446292943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4922355905623a6459ae4e9-82042643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5623a645a1a997_66909759',
  'variables' => 
  array (
    'user' => 0,
    'lang' => 0,
    'title' => 0,
    '__time' => 0,
    '__token' => 0,
    'myclips' => 0,
    'myclip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5623a645a1a997_66909759')) {function content_5623a645a1a997_66909759($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/yosito_sato/Sites/test.localhost/libs/Smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pageTitle'=>@constant('SITE_NAME'),'add_css'=>"slider.css",'add_js'=>"image_slider.js,tabs.js,clip_post.js,accordion.js"), 0);?>


<section>
<div id="keyvisual">
<img src="/data/common/top/ccc106.jpg" />
<img src="/data/common/top/aaa102.jpg" />
<img src="/data/common/top/aaa100.jpg" />
<img src="/data/common/top/aaa109.jpg" />
<img src="/data/common/top/aaa107.jpg" />
<img src="/data/common/top/ccc110.jpg" />
<img src="/data/common/top/www105.jpg" />
<img src="/data/common/top/www108.jpg" />
</div><!-- .fade_slider -->
<p id="catchcopy">きっと見つかるあなたのクリップ</p>
<form id="search" action="" method="post">
<input type="text" name="keyword" value="" placeholder="イベント名やキーワードなど"/>
<input type="submit" value="検索" />
</form>
</section>





<section class="clearfix">
<!-- タブ -->
<div class="tab">
<ul class="tab-list">
  <li><a href="#news">News</a></li>
  <li><a href="#event-clips">Event</a></li>
  <li><a href="#share-clips">Share</a></li>
  <li><a href="#my-clips">My</a></li>
  <li><a href="#timeline-clips">Timeline</a></li>
</ul>

<!-- 最新ニュース -->
<ul id="news" class="item-list none-list clearfix">
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトルああああああああああああああああああああああああああああああああああああああああああ</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトル</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトル</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトル</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
    <p>More</p>
  </a></li>
</ul>

<!-- イベント -->
<ul id="event-clips" class="event-list none-list">
  <li><a href="">
  <div class="event-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="event-content">
    <span class="category red clearfix">カテゴリ</span>
    <h2 class="event-title">イベントタイトル</h2>
    <p class="event-date">日程：2015.10.10 18:00 - 24:00</p>
    <p class="event-place">場所：東京都渋谷区１０９</p>
  </div><!-- div.event-content -->
  </a></li>
  <li><a href="">
  <div class="event-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="event-content">
    <span class="category red">カテゴリ</span>
    <h2 class="event-title">イベントタイトル</h2>
    <p class="event-place">場所：東京都渋谷区１０９</p>
    <p class="event-date">日程：2015.10.10 18:00 - 24:00</p>
  </div><!-- div.event-content -->
  </a></li>
  <li><a href="">
  <div class="event-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="event-content">
    <span class="category red">カテゴリ</span>
    <h2 class="event-title">イベントタイトル</h2>
    <p class="event-place">場所：東京都渋谷区１０９</p>
    <p class="event-date">日程：2015.10.10 18:00 - 24:00</p>
  </div><!-- div.event-content -->
  </a></li>
  <li><a href="">
    <p>More</p>
  </a></li>
</ul>

<!-- 共有クリップ -->
<ul id="share-clips" class="item-list none-list">
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトル</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトル</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトル</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
  <div class="list-thumbnail"><img src="http://placehold.jp/c0c0c0/000000/50x50.png" /></div>
  <div class="list-content">
    <span class="category red">カテゴリ</span>
    <h2 class="title">記事タイトル</h2>
    <p class="date">2015.10.10</p>
  </div><!-- div.list-content -->
  </a></li>
  <li><a href="">
    <p>More</p>
  </a></li>
</ul>


<?php echo '<script'; ?>
>

$(function () {
	function getItem() {
		var item = '' + 
		'<li><div>' +
		'<input type="file" name="dummy" accept="image/*;capture=camera" />' + 
		'<img class="clip-image" src="http://placehold.jp/50x50png?text=＋" />' + 
		'<img class="clip-cancel" src="http://placehold.jp//10x10png?text=X" />' + 
		'</div></li>' ;

		return item ;
	}


	$(document).on('click', 'img.clip-image', function () {
		$(this).prev().click() ;
	}) ;

	$(document).on('click', 'img.clip-cancel', function () {

		// 該当画像の削除
		var removeObj = $(this).parent().parent().remove() ;
		removeObj.empty() ;

		// 画像送信用のキーを振り直し
		$('ul#clip-images li').each(function(index) {

			// 画像選択用のダミー画像は除外
			var item = $(this).children().children('input[type=file]') ;
			if(item.attr('name') !== 'dummy') {
				item.attr('name', 'clip['+index+']') ;
			}
		}) ;

		// 画像選択用のダミー画像数取得
		var dummyCount = $('ul#clip-images li div input[name=dummy]').length ;
		if (dummyCount == 0) {
			$('ul#clip-images').append(getItem()) ;
		}
	}) ;

	$(document).on('change', 'ul#clip-images li div input[type=file]', function (){

		// ファイルオブジェクト取得
		var file = $(this).prop('files')[0];

		// 画像以外は処理を停止
		if (!file.type.match('image.*')) {
			return;
		}

		// 画像表示
		var reader = new FileReader();
		var obj = $(this) ;
		reader.onload = function() {
			var img_src = obj.next().attr('src', reader.result);

		}
		reader.readAsDataURL(file);

		// 画像送信用のキーの振り直し前にキー名取得
		var name = $(this).attr('name') ;
		// 画像送信用のキーを振り直し
		$('ul#clip-images li').each(function(index) {

			// 画像選択用のダミー画像は除外
			var item = $(this).children().children('input[type=file]') ;
			if (item.prop('files')[0]) {
			//if (item.attr('name') !== 'dummy') {
			//if (item.next().attr('src') != '') {
				item.attr('name', 'clip['+index+']') ;
			}
		}) ;

		var itemCount = $('ul#clip-images li').length ;
alert(name) ;
		if (itemCount < 4 && name == 'dummy') {
			$('ul#clip-images').append(getItem()) ;
		}

		$(this).next().next().css('top', $(this).next().position().top) ;
		$(this).next().next().css('left', $(this).next().position().left) ;
		$(this).next().next().css('display', 'block') ;
	}) ;
}) ;

<?php echo '</script'; ?>
>



<!-- 自分クリップ -->
<ul id="my-clips" class="clip-list none-list">
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
  <li>
  <a class="accordion" href="#">＋</a>
  <div id="clip-post">
    <form id="clip-form" action="/monoclip/post" method="post" enctype="multipart/form-data">
    <div id="clip-type">
    <select name="type">
    <option value="0" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('写真');?>
</option>
    <option value="3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->convert('一言');?>
</option>
    </select>
    <select name="category">
    <option value="1" selected>category</option>
    </select>
    </div><!-- div#clip-type -->

    <div id="clip-image-part">
      <div id="clip-title">
        <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" placeholder="タイトル" />
      </div><!-- div#clip-title -->
      <ul id="clip-images" class="none-list">
        <li><div>
        <input type="file" name="dummy" accept="image/*;capture=camera" />
        <img class="clip-image" src="http://placehold.jp/50x50png?text=＋" />
	<img class="clip-cancel" src="http://placehold.jp/25x25png?text=X" />
        </div></li>
      </ul>
      <div class="clearfix"></div>
    </div><!-- div#clip-image-part -->

    <div id="clip-murmur-part" class="" style="display: none;">
    </div><!-- clip-murmur-part -->

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
    <input type="hidden" name="__time" value="<?php echo $_smarty_tpl->tpl_vars['__time']->value;?>
" />
    <input type="hidden" name="__token" value="<?php echo $_smarty_tpl->tpl_vars['__token']->value;?>
" />
    </form>
  </div><!-- div#clip-post -->
  </li>

  <?php  $_smarty_tpl->tpl_vars['myclip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['myclip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['myclips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['myclip']->key => $_smarty_tpl->tpl_vars['myclip']->value) {
$_smarty_tpl->tpl_vars['myclip']->_loop = true;
?>
  <li><a href="/monoclip/clip/<?php echo $_smarty_tpl->tpl_vars['myclip']->value->getId();?>
">
  <div class="clip-label">
    <?php if ($_smarty_tpl->tpl_vars['myclip']->value->getType()==MonoclipsModel::CLIP_TYPE_IMAGES) {?>
    <span class="category red">Photo</span><br/>
    <?php } elseif ($_smarty_tpl->tpl_vars['myclip']->value->getType()) {?>
    <?php } elseif ($_smarty_tpl->tpl_vars['myclip']->value->getType()) {?>
    <?php }?>
    <img class="member-icon" src="http://placehold.jp/50x50png?text=test" />
    <p class="balloon-left"><?php echo $_smarty_tpl->tpl_vars['myclip']->value->getTitle();?>
</p>
  </div><!-- div.clip-label -->
  <div class="clip-content">
    <img src="/monoclip/imageapi/<?php echo $_smarty_tpl->tpl_vars['myclip']->value->image_id;?>
" />
    <p class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['myclip']->value->getCreated(),'%Y.%m.%d %H:%I');?>
</p>
  </div><!-- div.clip-content -->
  </a></li>
  <?php }
if (!$_smarty_tpl->tpl_vars['myclip']->_loop) {
?>
  <?php } ?>
  <?php if ($_smarty_tpl->tpl_vars['myclip']->value->getType()==MonoclipsModel::CLIP_TYPE_IMAGES) {?>
  <li><a href="/monoclip/list/">More</a></li>
  <?php }?>
<?php } else { ?>
  <li><a href="">
  Myクリップを利用する
  </a></li>
<?php }?>
</ul>

<!-- 友達クリップ -->
<ul id="timeline-clips" class="clip-list none-list">
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
  <?php if (!$_smarty_tpl->tpl_vars['user']->value->friends) {?>
  <li><a href="">
  友達にクリップを紹介する
  </a></li>
  <?php } else { ?>
  <?php if (true) {?>
  <li><a href="">
  <div class="clip-label">
    <span class="category red">カテゴリ</span><br/>
    <img class="member-icon" src="http://placehold.jp/50x50png?text=test" />
    <p class="balloon-left">記事タイトル</p>
  </div><!-- div.clip-label -->
  <div class="clip-content">
    <img src="http://placehold.jp/c0c0c0/000000/800x600.png?text=test" />
    <p class="date">2015.10.10 18:00</p>
  </div><!-- div.clip-content -->
  </a></li>
  <li><a href="">
  <div class="clip-label">
    <span class="category red">カテゴリ</span><br/>
    <img class="member-icon" src="http://placehold.jp/50x50png?text=test" />
    <p class="balloon-left">記事タイトル</p>
  </div><!-- div.clip-label -->
  <div class="clip-content">
    <img src="http://placehold.jp/c0c0c0/000000/400x300.png?text=test" />
    <p class="date">2015.10.10 18:00</p>
  </div><!-- div.clip-content -->
  </a></li>
  <?php }?>
  <li><a href="">
    <p>More</p>
  </a></li>
  <?php }?>
<?php } else { ?>
  <li><a href="">
  Myクリップを利用する
  </a></li>
<?php }?>
</ul>
</div>
<section>

<!-- メニュー -->
<section class="clearfix">
<ul class="none-list menu-2-columns">
<li><a href="/"><img src="http://placehold.jp/c0c000/000000/200x100.png?text=media" /></a></li>
<li><a href="/"><img src="http://placehold.jp/00c0c0/000000/200x100.png?text=my" /></a></li>
<li><a href="/"><img src="http://placehold.jp/c000c0/000000/200x100.png?text=friend" /></a></li>
<li><a href="/"><img src="http://placehold.jp/c0c0c0/000000/200x100.png?text=group" /></a></li>
</ul>
</section>




<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('TEMPLATE_DIR'))."/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
