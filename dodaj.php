<?php
$a=$_POST['textarena'];
$b=$_POST['text'];	
if($a && $b)
{
$a=htmlspecialchars($a);
$b=htmlspecialchars($b);
$baza=new PDO('mysql:dbname=dupa;host=localhost','root');

	$q=$baza->prepare('INSERT INTO wpisy(nazwa,wpis) VALUES (:nazwa,:wpis)');
	$q->bindValue('nazwa',$b);
	$q->bindValue('wpis',$a);
	$q->execute();

}
?>
<?php
header('Location: index.php');
?>

