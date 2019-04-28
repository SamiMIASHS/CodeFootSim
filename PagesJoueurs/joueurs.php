<!DOCTYPE html>
<html>
<head>
<title>Joueurs</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<style type="text/css">
#search{color: white; width: 400px; padding: 10px; display: block; border-radius: 3px; border:3px solid yellow; margin: 0 auto; background-color: black; }
div#back_result{padding: 10px; width: 400px; margin: 0 auto; border:1px solid silver; display: none; z-index: 2; background-color: white; }
#pic{vertical-align: middle;} #user{margin: 3px;}
#recherche{margin: 0 auto;}
#lienSearch{text-decoration: none; color: black;}
</style>
<script>
$(document).ready(function () {
$('#search').keyup(function () {
	var name = $(this).val();
	$.post('get_users.php', {name:name}, function (data) {
		$('div#back_result').css({'display':'block'});
		$('div#back_result').html(data);
	})
})
	
})
</script>
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
        <a href="joueurs.php">JOUEURS</a>
    </li>
    <li>
        <a href="../PagesStats/stats.php">STATISTIQUES</a>
    </li>
    <li>
        <a href="../PagesSimulation/session.php">SIMULATION</a>
    </li>
    <li>
        <a href="../PagesContact/contact.php">CONTACT</a>
    </li>
</ul>
</div>

<div class="rechercheJoueurs">
<h1>JOUEURS</h1><br>
<a href="joueurs.php"> <input type="button" value="Réinitialiser" id="btReini"/> </a>
</div>

<div id="recherche">
<form method="post" action="">
<br><input type="text" name="search" id="search" placeholder="SEARCH"/ autocomplete="off">
</form>
<div id="back_result"></div>
</div>

<div class="listeJoueurs">


<?php 
require("../bd.php");
$bdd = getBD();

$tri=$_GET['tri'];
$order=$_GET['order'];

if(isset($tri)&&isset($order)){
	$sql='select photo, name, overall, position, value, height, vitesse, tir, passe, dribble, defense, physique from joueurs, stats where joueurs.id_joueurs = stats.id_stats and position != "GK" ORDER BY '.$tri.' '.$order . ' limit 10 ';}
	else {
		$sql='select photo, name, overall, position, value, height, vitesse, tir, passe, dribble, defense, physique from joueurs, stats where joueurs.id_joueurs = stats.id_stats and position != "GK" ORDER BY overall DESC limit 10';
		}
	

?>


<table class="tableauJoueurs">
<tr id="nomColonnes">
<th>NAME</th>
<th><a href="joueurs.php?tri=overall&order=DESC">↘</a>  NOTE  <a href="joueurs.php?tri=overall&order=ASC">↗</a></th>
<th>POSITION</th>
<th>PRIX</th>
<th>TAILLE</th>
<th><a href="joueurs.php?tri=vitesse&order=DESC">↘</a>  VIT  <a href="joueurs.php?tri=vitesse&order=ASC">↗</a></th>
<th><a href="joueurs.php?tri=tir&order=DESC">↘</a>  TIR  <a href="joueurs.php?tri=tir&order=ASC">↗</a></th>
<th><a href="joueurs.php?tri=passe&order=DESC">↘</a>  PAS  <a href="joueurs.php?tri=passe&order=ASC">↗</a></th>
<th><a href="joueurs.php?tri=dribble&order=DESC">↘</a>  DRI  <a href="joueurs.php?tri=dribble&order=ASC">↗</a></th>
<th><a href="joueurs.php?tri=defense&order=DESC">↘</a>  DEF  <a href="joueurs.php?tri=defense&order=ASC">↗</a></th>
<th><a href="joueurs.php?tri=physique&order=DESC">↘</a>  PHY  <a href="joueurs.php?tri=physique&order=ASC">↗</a></th>
</tr>



<?php
$req = $bdd->query($sql);

while ($ligne = $req->fetch()) 
{ 
                echo "<tr>";
                echo "<td id='nomJoueur'><img src='" . $ligne['photo'] . "'><a href=\"joueursSolo.php?name=".$ligne['name']."\">". $ligne['name'] . "</a></td><td class='carreNote'>" . $ligne['overall'] . "</td><td>" . $ligne['position'] . "</td><td>" . $ligne['value'] . "</td><td>" . $ligne['height'] . " cm</td><td class='carreNote'>" . $ligne['vitesse'] . "</td><td class='carreNote'>" . $ligne['tir'] . "</td><td class='carreNote'>" . $ligne['passe'] . "</td><td class='carreNote'>" . $ligne['dribble'] . "</td><td class='carreNote'>" . $ligne['defense'] . "</td><td class='carreNote'>" . $ligne['physique'] . "</td>" ;
                echo "</tr>";
                }
$req->closeCursor();
?>



</table>
</div><br>





</body>
</html>