<html>
<head>
<title>{$smarty.const.SITE_NAME}{if $pageTitle}&nbsp;|&nbsp;{$pageTitle}{/if}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
{*<link rel="stylesheet" href="/css/jquery-ui.min.css">*}
<link rel="stylesheet" href="/css/jquery-ui-timepicker-addon.css">
{if $isPc}
<link rel="stylesheet" href="/css/common.css">
{elseif $isSp}
<link rel="stylesheet" href="/css/common.sp.css">
<link rel="stylesheet" href="/css/style.sp.css">
{else}
<link rel="stylesheet" href="/css/common.css">
{/if}
<link rel="stylesheet" href="/css/slick.css">
<link rel="stylesheet" href="/css/slick-theme.css">
<!--
-->

{if $add_css}
{assign var="css" value=","|explode:$add_css}
{foreach from=$css item=item}
<link rel="stylesheet" href="/css/{$item}" type="text/css" />
{/foreach}
{/if}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery-ui-sliderAccess.js"></script>
<script src="/js/jquery-ui-timepicker-addon.js"></script>
<script src="/js/jquery-ui-timepicker-ja.js"></script>
<script src="/js/slick.min.js"></script>

{if $add_js}
{assign var="js" value=","|explode:$add_js}
{foreach from=$js item=item}
<script src="/js/{$item}" type="text/javascript" ></script>
{/foreach}
{/if}

</head>
<body>
<header id="header">
<nav>
<ul class="none-list">
<li><a href="/"><img src="http://placehold.jp/200x100.png?text=logo" /></a></li>
{if !$user}
<li><a href="/user/join"><img src="http://placehold.jp/c0c000/000000/200x100.png?text=signin" /></a></li>
<li><a href="/user/login?r={$smarty.server.REQUEST_URI|urlencode}"><img src="http://placehold.jp/00c0c0/000000/200x100.png?text=login" /></a></li>
{else}
<li><a href="/user/mypage"><img src="http://placehold.jp/c0c000/000000/200x100.png?text=mypage" /></a></li>
<li><a href="/user/message"><img src="http://placehold.jp/00c0c0/000000/200x100.png?text=mail" /></a></li>
{/if}
<li><a href="#"><img src="http://placehold.jp/c000c0/000000/200x100.png?text=menu" /></a></li>
</ul>
</nav>
</header>
<div id="container" class="clearfix">
