{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl" add_css="monoclip/monoclip.css" add_js="clip_post.js,image_post.js,memo_post.js,image_slider.js"}


<p>monoclip</p>

{if !$user}
<a href="/user/login?r={$smarty.server.REQUEST_URI|urlencode}">{$lang->convert('ログイン')}</a>
{/if}



<!--
 -
 - シェアクリップ
 -
 -->

<section id="contents">
<div id="main">
{if !$shareclips}

{else}
<div class="image_slider">
{foreach from=$shareclips item=clip name=clip}
<div>
    <!-- クリップ画像表示 -->
    <a href="/monoclip/clip/{$clip->getId()}">
    <figure id="figure-{$clip->getId()}">
    <figcaption>{$lang->convert($clip->getTitle())}</figcaption>
{if $shareclipImages[$smarty.foreach.clip.index]}
    <img src="/monoclip/imageapi/{$shareclipImages[$smarty.foreach.clip.index]->getId()}" height="100px" />
{else}
    <img src="http://placehold.jp/100x100.png" height="100px" />
{/if}
    </figure>
    </a>
</div>
{/foreach}
</div><!-- .image_slider -->
{/if}


<!--
 -
 - 個人クリップ
 -
 -->
<form id="clip-post" action="/monoclip/post" method="post">
<div>
<select name="type">
<option value="0" selected>{$lang->convert('写真')}</option>
<option value="3" >{$lang->convert('メモ')}</option>
</select>
</div>
<div>
<label>タイトル</label>
<input type="text" name="title" value="" />
</div>
<div>
<select name="publish">
<option value="1" selected>{$lang->convert('全体に公開')}</option>
<option value="2">{$lang->convert('友達に公開')}</option>
<option value="3">{$lang->convert('ブループに公開')}</option>
<option value="4">{$lang->convert('非公開')}</option>
</select>
<a href="#" class="button">クリップを追加</a>
</div>
<input type="hidden" name="__time" value="{$__time}" />
<input type="hidden" name="__token" value="{$__token}" />
</form>

<div id="image-clips">
<ul class="none-list">
<!-- 画像のクリップフォーム -->
{foreach from=$imageclips item=clip}
<li>
    <!-- クリップ画像表示 -->
    <a href="/monoclip/clip/{$clip->getId()}">
    <figure id="figure-{$clip->getId()}">
        <figcaption>{$lang->convert($clip->getTitle())}</figcaption>
{if $imageclipImages[$clip->getId()]}
        <img id="upload{$clip->getId()}" src="/monoclip/imageapi/{$imageclipImages[$clip->getId()]->getId()}" width="100px" />
{else}
        <img id="upload{$clip->getId()}" src="http://placehold.jp/100x100.png" width="100px" />
{/if}
    </figure>
    </a>

    <!-- 画像のクリップフォーム -->
    <form class="image_uploader" data-image-id="{$clip->getId()}" action="/monoclip/update/{$clip->getId()}" method="post" enctype="multipart/form-data">
    <input type="file" name="clip" accept="image/*;capture=camera" style="display: none;"/>
    <a class="image-select button" href="#">選択</a>
    <a class="image-clip button" href="#">クリップ</a>
    <input type="hidden" name="__time" value="{$__time}" />
    <input type="hidden" name="__token" value="{$__token}" />
    </form>
</li>
{foreachelse}
<li></li>
{/foreach}
</ul>
</div><!-- div#image-clips -->

<div id="memo-clips">
<ul>
{foreach from=$memoclips item=clip}
<li>
    <!-- メモのクリップフォーム -->
    <form class="memo_uploader" action="/monoclip/update/{$clip->getId()}" method="post">
    <p>{$clip->getTitle()}</p>
{if $memoclipMemos[$clip->getId()] && $memoclipMemos[$clip->getId()]->getText()}
    <div class="memo is-memo">{$memoclipMemos[$clip->getId()]->getText()|nl2br}</div>
    <textarea name="text" class="memo" style="display: none;">{$memoclipMemos[$clip->getId()]->getText()|nl2br}</textarea>
{else}
    <div class="memo no-memo">
    </div>
    <textarea name="text" class="memo" style="display: none;">aaa</textarea>
{/if}
    <input type="hidden" name="__time" value="{$__time}" />
    <input type="hidden" name="__token" value="{$__token}" />
    </form>
</li>
{foreachelse}
<li>
</li>
{/foreach}
</ul>
</div><!-- div#memo-clip -->
</div><!-- div.main -->

<!--
 -
 - メニュー
 -
 -->
{include file="`$smarty.const.TEMPLATE_DIR`/common/menu.parts.tpl"}
</section><!-- #contents -->

{include file="`$smarty.const.TEMPLATE_DIR`/common/information.parts.tpl"}
{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
