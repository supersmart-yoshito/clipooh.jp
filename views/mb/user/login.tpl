{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl"}


{if $error}
<p>error</p>
{/if}

<div class="center"> 
<form action="" method="post">
<input type="text" name="user_id" value="{$user_id}" placeholder="{$lang->convert('ログインID')}"/>
<input type="text" name="user_pass" value="{$user_pass}" placeholder="{$lang->convert('パスワード')}"/>
<input type="submit" value="{$lang->convert('ログイン')}" />
{if $r}
<input type="hidden" name="r" value="{$r}" />
{/if}
<input type="hidden" name="__time" value="{$__time}" />
<input type="hidden" name="__token" value="{$__token}" />
</form>
</div>


{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
