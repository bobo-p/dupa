<?php
$a=$_POST['textarena'];
$b=$_POST['text'];	
if($a && $b)
{
$a=htmlspecialchars($a);
$b=htmlspecialchars($b);
$baza=new PDO('mysql:dbname=dupa;host=localhost','root');
$q=$baza->prepare('SELECT id FROM wpisy');
if($q->execute())
{
	$row=$q->fetch(PDO::FETCH_NUM);
	$r=$row[0];
	$q=$baza->prepare('INSERT INTO wpisy VALUES (:id,:nazwa,:wpis)');
	$q->bindValue('id',$r+1);
	$q->bindValue('nazwa',$b);
	$q->bindValue('wpis',$a);
	$q->execute();
}
}
?>
<?php
header('Location: index.php');
?>

