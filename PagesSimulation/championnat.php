<!DOCTYPE html>
<html>
<?php 
session_start();
require('../bd.php');
$bdd=getBD();
?>


<head>
<title>Accueil Simulation</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
</head>


<body>

<div class="banniere">
<a href="../index.php"><img src="../Images/logoFootSim.jpeg" alt="logoFootSim" class="titreBanniere"></a>
</div>

<div class="menu">
<ul>
    <li>
        <a href="../index.php">ACCUEIL</a>
    </li>
    <li>
        <a href="../PagesJoueurs/joueurs.php">JOUEURS</a>
    </li>
    <li>
        <a href="../PagesStats/stats.php">STATISTIQUES</a>
    </li>
    <li>
        <a href="session.php">SIMULATION</a>
    </li>
    <li>
        <a href="../PagesContact/contact.php">CONTACT</a>
    </li>
</ul>
</div>

<div class="rechercheJoueurs">
<h1>SIMULATION</h1><br>
<h4>Equipes présentes en <u>
<?php if($_GET['id_champ']=="Premier League")
 {echo "Premier League";}
 else if($_GET['id_champ']=="Ligue 1")
 {echo "Ligue 1";}
 else if($_GET['id_champ']=="Bundesliga") 
 {echo "Bundesliga";}
 else if($_GET['id_champ']=="Série A") 
 {echo "Série A";}
 else
 {echo "Liga";}
?> 	
</u>
</h4>
</div>

<div class="tableauEquipeChampio">
<table>
		<?php 
		if($_GET['id_equipe']==1) {
	$req = $bdd->query('select Nom,Logo from club where championnat = "'.$_GET["id_champ"].'" ORDER BY Nom ASC');
	while ($ligne = $req ->fetch()) {
	echo"<tr class='ec'>";
	echo"<td><a class='cliqteam' href='simulationreelle.php?id_team1=".$ligne['Nom']."'>".$ligne['Nom']."</a></td><td><img src='".$ligne['Logo']."' alt='".$ligne['Nom']."' width='20px' heigth='20px'></td>";
	echo"</tr>";
}}
else {$req = $bdd->query('select Nom,Logo from club where championnat = "'.$_GET["id_champ"].'" ORDER BY Nom ASC');
	while ($ligne = $req ->fetch()) {
	echo"<tr class='ec'>";
	echo"<td><a class='cliqteam' href='simulationreelle.php?id_team2=".$ligne['Nom']."'>".$ligne['Nom']."</a></td><td><img src='".$ligne['Logo']."' alt='".$ligne['Nom']."' width='20px' heigth='20px'></td>";
	echo"</tr>";
}}
$req ->closeCursor(); 
?>
</table>
 </div><br>
 	
</body>
</html>