<!DOCTYPE html>

<html>
<head>
		<meta name="description" content="Strona o dupie" />
		<META NAME="kewords" CONTENT="dupa, o dupie,twoja dupa,nuda,dup to strona dla ludzi ktorym sie nudzi,w dupie"/>
		<meta name="author" content="Duperszpic" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/ >
		<META http-equiv="Refresh" content="50"/>
		<title>Dupa dla ludzi którym sie nudzi</title>
		<link rel="stylesheet" type="text/css" href="dupa.css"/>
</head>
<body style="background-color:{$color};">
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