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
$dane['wpisy']=array();

$dane['linki'] = array('index' => "Strona główna", 'odupie' => 'O dupie', 'kontakt' => 'Kontakt');

if($tpl=='index') {
	
	$baza=new PDO('mysql:dbname=dupa;host=localhost','root');
$q=$baza->prepare('SELECT nazwa,wpis FROM wpisy');
if($q->execute())
{
	$w=$q->fetchAll(PDO::FETCH_ASSOC);
	$licznik=0;
	foreach( $w as $i)
	{
		$wpis=$i['nazwa'].' '."<b>napisał:</b>".$i['wpis'];
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
