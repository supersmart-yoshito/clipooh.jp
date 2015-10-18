<html>
<head>
<title>{$pageTitle}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

{if $isPc}
<link rel="stylesheet" href="/css/common.css">
{elseif $isSp}
<link rel="stylesheet" href="/css/common.sp.css">
{else}
<link rel="stylesheet" href="/css/common.css">
{/if}
<link rel="stylesheet" href="/css/slick.css">
<link rel="stylesheet" href="/css/slick-theme.css">

{if $add_css}
{assign var="css" value=","|explode:$add_css}
{foreach from=$css item=item}
<link rel="stylesheet" href="/css/{$item}" type="text/css" />
{/foreach}
{/if}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/slick.min.js"></script>

{if $add_js}
{assign var="js" value=","|explode:$add_js}
{foreach from=$js item=item}
<script src="/js/{$item}" type="text/javascript" ></script>
{/foreach}
{/if}

</head>
<body>
<header>
</header>
<div id="container">
