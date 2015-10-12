{include file='common/header.tpl' pageTitle=$smarty.const.SITE_NAME}



<ul>
{foreach from=$list item=item}
<li>{$item->getSessionId()}</li>
{/foreach}
</ul>

<iframe width="560" height="315" src="https://www.youtube.com/embed/7hVYEJA91Pg" frameborder="0" allowfullscreen></iframe>


{include file='common/footer.tpl'}
