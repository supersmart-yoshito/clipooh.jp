{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl"}

<p>description</p>
<form action="" method="post">
<input type="submit" value="{$lang->convert('確認')}" />
<input type="hidden" name="id" value="{$id}" />
<input type="hidden" name="__time" value="{$__time}" />
<input type="hidden" name="__token" value="{$__token}" />
</form>

{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
