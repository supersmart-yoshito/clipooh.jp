{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl"}


<script>
{literal}
$(function (){

	$('img').on('load', function() {

		if ($(this).width() > $(this).height()) {
			$(this).addClass('max-height') ;
		} else {
			$(this).addClass('max-width') ;
		}

	}) ;
}) ;
{/literal}
</script>


<section>
{if $user}

<p class="photo-clip-tltle">{$monoclip->getTitle()}</p>
<p class="photo-clip-tltle">{$monoclip->getTitle()}</p>
<p class="photo-clip-tltle">{$monoclip->getTitle()}</p>
<ul id="photo-clip">
{foreach from=$clips item=clip}
  <li><a href="/monoclip/imageapi/{$clip->getId()}"><img src="/monoclip/imageapi/{$clip->getId()}" /></a></li>
{foreachelse}
  <li></li>
{/foreach}
</ul>
{else}
<li><a href="/user/login?r={$smarty.server.REQUEST_URI|urlencode}">{$lang->convert('ログイン')}</a></li>
{/if}
</section>

{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
