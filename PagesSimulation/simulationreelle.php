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
<h1>SIMULATION - Equipes réelles</h1>
</div>

<div id="team1">
<p class="equipe">- EQUIPE 1 -</p><br>
<p class="equipe">Sélectionnez votre championnat !</p><br>
<div id="photoC">
<a class="champ" href="championnat.php?id_champ=Premier League&id_equipe=1"><img src="../Images/pl.jpg" alt="Premier League" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Ligue 1&id_equipe=1"><img src="../Images/l1.jpg" alt="Ligue 1" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Bundesliga&id_equipe=1"><img src="../Images/bun.jpg" alt="Bundesliga" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Série A&id_equipe=1"><img src="../Images/sa.jpg" alt="Serie A" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Liga&id_equipe=1"><img src="../Images/liga.jpg" alt="Liga" width="40px" height="40px"></a>
</div>
</div>
<div id="team2">
<p class="equipe">- EQUIPE 2 -</p><br>
<p class="equipe">Sélectionnez votre championnat !</p><br>
<div id="photoC">
<a class="champ" href="championnat.php?id_champ=Premier League&id_equipe=2"><img src="../Images/pl.jpg" alt="Premier League" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Ligue 1&id_equipe=2"><img src="../Images/l1.jpg" alt="Ligue 1" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Bundesliga&id_equipe=2"><img src="../Images/bun.jpg" alt="Bundesliga" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Série A&id_equipe=2"><img src="../Images/sa.jpg" alt="Serie A" width="40px" height="40px"></a>
<a class="champ" href="championnat.php?id_champ=Liga&id_equipe=2"><img src="../Images/liga.jpg" alt="Liga" width="40px" height="40px"></a>
</div>
</div>
<br>
<?php 
if(!isset($_GET['id_team1']) && !isset($_GET['id_team2']))
{echo "";}
elseif(isset($_GET['id_team1'])) 
{$_SESSION['team1']=$_GET['id_team1'];
echo "<p id='equipe1'>".$_SESSION['team1']."</p>";

}
else 
{$_SESSION['team2']=$_GET['id_team2'];
echo "<p id='equipe1'>".$_SESSION['team1']."</p>";


echo "<p id='equipe2'>".$_SESSION['team2']."</p>";
echo "</br>";
echo "<div class='formBTsimuler'>
<form id='simuleMatch' action='simulationmatch.php' method='post'>
<input type='submit' value='Simuler Match' id='btSimulerMatch' />
</form>
</div>";
}

?>



</body>
</html>
