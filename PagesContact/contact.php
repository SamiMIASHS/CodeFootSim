<!DOCTYPE html>
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
        <a href="../PagesSimulation/session.php">SIMULATION</a>
    </li>
    <li>
        <a href="contact.php">CONTACT</a>
    </li>
</ul>
</div>

<div class="rechercheJoueurs">
<h1>CONTACT</h1><br>
<img src="../Images/contact.jpg" alt="logoContact" class="logoContact">
</div>

<div class="pageContact">

<form action="message.php" method="get" autocomplete="on">
<div id="npmContact">
<table>
<tr>
<td>Nom :</td>
<td><input type="text" name="n" value="<?php if(isset($_GET['n'])){echo $_GET['n'];}?>"/></td>
</tr>
<tr>
<td>Prénom :</td>
<td><input type="text" name="p" value="<?php if(isset($_GET['p'])){echo $_GET['p'];}?>"/></td>
</tr>
<tr>
<td>Mail :</td>
<td><input type="text" name="mail" value="<?php if(isset($_GET['mail'])){echo $_GET['mail'];}?>"/></td>
</tr>
</table>
</div>
<div id="messContact">
<table>
<tr>
<td><TEXTAREA rows="4" cols="50" name="mes">Votre message...</TEXTAREA></td>
</tr>
</table>
</div><br><br>
<input type="submit" value="Envoyer" name="submit" id="send" />
</form>

</div>

</body>

</html>