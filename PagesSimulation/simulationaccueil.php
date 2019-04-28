<!Doctype html>
<html>
<?php 
session_start();

$_SESSION['pseudo']=$_POST['pseudo']
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
<h1>SIMULATION - Etape 2</h1><br>
<h4>Quelle type d'équipe voulez-vous utilser ?</h4>
</div>


<div class="btImgetape2">
<a id="lienVersR" href="simulationreelle.php"> Equipe Réelle </a>
<a id="lienVersP" href="simulationperso.php"> Equipe personnalisée</a><br><br>
<img src="../Images/joueurReel.png" alt="joueurReel" id="imgJoueurReel">
<img src="../Images/joueurPerso.jpg" alt="joueurPerso" id="imgJoueurPerso">
</div><br>


</body>
</html>