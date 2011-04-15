<?php
require('smarty.php');

$dupa = isset($_GET['dupa']) ? $_GET['dupa'] : '';

switch($dupa)
{
	case 'glowna':$tpl='index';break;
	case 'odupie':$tpl='odupie';break;
	case 'kontakt':$tpl='kontakt';break;
	case 'wpisy':$tpl='wpisy';break;
	default : $tpl='index';break;
}
$dane['wpisy']=array();

$dane['linki'] = array('index' => "Strona główna", 'odupie' => 'O dupie', 'kontakt' => 'Kontakt');

if($tpl=='index') {
	
	@ $baza=new mysqli('mysql6.000webhost.com','a1589907_user','dupa123','a1589907_dupa');
@ $q=$baza->query("SELECT nazwa,wpis FROM wpisy");

	$w=$q->num_rows;
	$licznik=0;
	for( $i=0;$i<$w; $i++)
	{
		@ $x=$q->fetch_assoc();
		$wpis=$x['nazwa'].' '."<b>napisał:</b>".$x['wpis'];
		$dane['wpisy'][]=$wpis;
		
	}
	if($q!=0)$q->free();
	if(mysqli_connect_errno())@ $baza->close();
	
	$dane['wpisy'] = array_reverse($dane['wpisy']);
				}

$zm=$tpl.'.tpl';
$smarty->assign('dane',$dane);
$smarty->assign('tpl',$tpl);
$smarty->assign('plik',$zm);
$smarty->display('dupa.tpl');
?>
