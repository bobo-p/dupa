<?php
require('smarty.php');
switch($_GET['dupa'])
{
case 'glowna':$tpl='index';break;
case 'odupie':$tpl='odupie';break;
case 'kontakt':$tpl='kontakt';break;
case 'wpisy':$tpl='wpisy';break;
	default : $tpl='index';break;
}
$dane=array();

$dane['linki'] = array('index' => "Strona główna", 'odupie' => 'O dupie', 'kontakt' => 'Kontakt');

if($tpl=='index') {
	
	@ $file=fopen("wpis.txt",'rt');
	if($file) {
		while (!feof($file)) {
			$wpis=fgets($file,999);
			$dane['wpisy'][]=$wpis;
		}
	}
	
	$dane['wpisy'] = array_reverse($dane['wpisy']);
}

$zm=$tpl.'.tpl';
$smarty->assign('dane',$dane);
$smarty->assign('tpl',$tpl);
$smarty->assign('plik',$zm);
$smarty->display('dupa.tpl');
?>
