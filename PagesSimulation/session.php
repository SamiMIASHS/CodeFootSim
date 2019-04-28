<!DOCTYPE html>
<?php 
session_start()
?>
<html>

<head>
<title>Contact</title>
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
<h1>SIMULATION - Etape 1</h1><br>
<h4>Vous avez choisi la partie simulation. Avant de commencer, veuillez choisir un pseudo.</h4>
</div>

<div class="pageContact">
<form id="pseudo" action="simulationaccueil.php" method="post">
Choisissez votre pseudo :
<input type="text" name="pseudo" value="">
<input type="submit" value="Continuer" id="btContinuer" />
</form>
</div>

</body>
</html>