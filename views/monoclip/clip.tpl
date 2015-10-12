{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl"}

{if $user}


<p>clip</p>

<div>
</div>

<ul>
{foreach from=$clips item=clip}
<li><div>
<img width="100" src="/monoclip/imageapi/{$clip->getId()}" />
</div></li>
{/foreach}
</ul>


{else}
<li><a href="/user/login?r={$smarty.server.REQUEST_URI|urlencode}">{$lang->convert('ログイン')}</a></li>
{/if}

{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
