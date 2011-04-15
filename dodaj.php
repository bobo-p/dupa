<?php
$a=$_POST['textarena'];
$b=$_POST['text'];	
if($a && $b)
{
$a=htmlspecialchars($a);
$b=htmlspecialchars($b);
/*$baza=new PDO('mysql:dbname=dupa;host=localhost','root');

	$q=$baza->prepare('INSERT INTO wpisy(nazwa,wpis) VALUES (:nazwa,:wpis)');
	$q->bindValue('nazwa',$b);
	$q->bindValue('wpis',$a);
	$q->execute();*/
	@ $baza=new mysqli('mysql6.000webhost.com','a1589907_user','dupa123','a1589907_dupa');
	if(mysqli_connect_errno())
	{
	 echo "Baza danych pierdyk³a";
	 exit;
	}
	$a=addslashes($a);
	$b=addslashes($b);
	$ask="INSERT INTO wpisy(nazwa,wpis) VALUES ('$b','$a')";
	$wynik=$baza->query($ask);
	if($wynik==0)
	{
	 echo "dupa";
	 exit;
	}
	
	
}
?>
<?php
header('Location: index.php');
?>

