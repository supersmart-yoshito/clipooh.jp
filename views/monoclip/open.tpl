{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl"}


<form action="" method="post">
<input type="text" name="title" value="{$title}" />

<table>
<tr><th>{$lang->convert('クリップ')}</th></tr>
<tr><td>
<input type="radio" name="type" value="0" {if empty($type)}checked{/if}/>{$lang->convert('Photos')}
{*<!--
<input type="radio" name="type" value="1" {if $type == 1}checked{/if}/>{$lang->convert('Videos')}
<input type="radio" name="type" value="2" {if $type == 2}checked{/if}/>{$lang->convert('Musics')}
-->*}
<input type="radio" name="type" value="3" {if $type == 3}checked{/if}/>{$lang->convert('Memos')}
</td></tr>

<tr><th>{$lang->convert('公開設定')}</th></tr>
<tr><td>
<input type="radio" name="publish" value="1" {if empty($publish)}checked{/if}/>{$lang->convert('全体に公開')}
<input type="radio" name="publish" value="2" {if $publish == 1}checked{/if}/>{$lang->convert('友達に公開')}
<input type="radio" name="publish" value="3" {if $publish == 2}checked{/if}/>{$lang->convert('ブループに公開')}
<input type="radio" name="publish" value="4" {if $publish == 3}checked{/if}/>{$lang->convert('非公開')}
</td></tr>
</table>

<input type="submit" value="{$lang->convert('確認する')}" />
<input type="hidden" name="__time" value="{$__time}" />
<input type="hidden" name="__token" value="{$__token}" />
</form>

{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
