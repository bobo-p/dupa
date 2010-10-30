<?php

$a=$_POST['textarena'];
$b=$_POST['text'];
	
if($a && $b)
{
$file=fopen("wpis.txt",'at');
$ciag=" <b>$b</b> napisał:$a"."\n";
fwrite($file,$ciag,strlen($ciag));
fclose($file);
}

header('Location: index.php');
?>
