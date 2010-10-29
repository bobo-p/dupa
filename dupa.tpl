<!DOCTYPE html>

<html>
<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<META http-equiv="Refresh" content="50">
		<title>Dupa dla ludzi którym sie nudzi</title>
		<link rel="stylesheet" type="text/css" href="dupa.css"/>
</head>
<body>
		<!--Pasek-->
		<h1>dupa</h1>
		<ul class="navigate">
			{foreach from=$dane.linki key=link item=nazwa}
			<li>
				{if $link == $tpl}
				<a id="a1" href="?dupa={$link}">{$nazwa}</a>
				{else}
				<a href="?dupa={$link}">{$nazwa}</a>
				{/if}
			</li>
			{/foreach}
		</ul>
		
		{include file=$plik}
</body>
</html>		