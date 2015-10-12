{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl"}

<p>confirm</p>
<form action="" method="post">
<input type="submit" value="{$lang->convert('退会')}" />
<input type="hidden" name="id" value="{$id}" />
<input type="hidden" name="confirm" value="1" />
<input type="hidden" name="__time" value="{$__time}" />
<input type="hidden" name="__token" value="{$__token}" />
</form>

{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
