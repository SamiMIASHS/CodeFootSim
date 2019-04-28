<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
		<title>Enregistrement</title>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<?php 
		if ($_GET['n']== "" || $_GET['p']== "" || $_GET['mail']== "" || $_GET['mes']== "")
		{
			echo "<meta http-equiv='refresh' content='0;URL=contact.php?&n=".$_GET['n']."&p=".$_GET['p']."&mail=".$_GET['mail']."&mes=".$_GET['mes']."'>"; 
		}
		else {
			Enregistrer($_GET['n'],$_GET['p'],$_GET['mail'],$_GET['mes']);
			echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; 
		}
		?>
	</head>
<?php 
function Enregistrer($nom,$prenom,$mail, $message)
{require('../bd.php');
$bdd=getBD();
$req="INSERT INTO message (nom,prenom,mail,message) VALUES ('".$nom."','".$prenom."','".$mail."','".$message."')";
echo $req;
$bdd->query($req);}
?>
</html>