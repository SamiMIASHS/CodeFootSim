<!DOCTYPE html>
<html>
<head>
<title>Joueurs</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
</head>
<body>



<div class="banniere">
<a href="../index.php"><img src="../Images/logoFootSim.jpeg" alt="" class="titreBanniere"></a>
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

<?php 
require("../bd.php");
$bdd = getBD();


$rep = $bdd->prepare('select * from joueurs, nationality, club, stats where joueurs.name_nationality = nationality.name_nationality and joueurs.club = club.nom and joueurs.id_joueurs = stats.id_stats and name = ?');
if($rep->execute(array($_GET['name']))){
while($ligne = $rep->fetch()){
echo "<p><h1>".$ligne['Overall']." - ".$ligne['Name']."</h1></p>";
echo "<p><h3>• ".$ligne['name_nationality']."  •  ".$ligne['Club']."</h3></p></div>";
echo "<div id='listeJoueursSolo'><img src='".$ligne['Photo']."'/>";
echo "<h1>".$ligne['Position']."</h1><img src='".$ligne['Flag']."'/></div>";

echo "<div id='statsJoueurs'><table><tr><th>VITESSE</th></tr>
<tr><td>Accélération<td/><td>".$ligne['Acceleration']."</td></tr>
<tr><td>Vitesse<td/><td>".$ligne['SprintSpeed']."</td></tr>
<tr><th>TIR</th></tr>
<tr><td>Postionnement<td/><td>".$ligne['Positioning']."</td></tr>
<tr><td>Finition<td/><td>".$ligne['Finishing']."</td></tr>
<tr><td>Puissance de tir<td/><td>".$ligne['ShotPower']."</td></tr>
<tr><td>Tir de loin<td/><td>".$ligne['LongShots']."</td></tr>
<tr><td>Vollée<td/><td>".$ligne['Volleys']."</td></tr>
<tr><td>Penalty<td/><td>".$ligne['Penalties']."</td></tr>
<tr><th>PASSE</th></tr>
<tr><td>Vision<td/><td>".$ligne['Vision']."</td></tr>
<tr><td>Centre<td/><td>".$ligne['Crossing']."</td></tr>
<tr><td>Coup franc<td/><td>".$ligne['FKAccuracy']."</td></tr>
<tr><td>Passes courtes<td/><td>".$ligne['ShortPassing']."</td></tr>
<tr><td>Passes longues<td/><td>".$ligne['LongPassing']."</td></tr>
<tr><td>Effet<td/><td>".$ligne['Curve']."</td></tr></table></div>";

echo "<div id='statsJoueurs2'><table><tr><th>DRIBBLE</th></tr>
<tr><td>Agilité<td/><td>".$ligne['Acceleration']."</td></tr>
<tr><td>Equilibre<td/><td>".$ligne['SprintSpeed']."</td></tr>
<tr><td>Réaction<td/><td>".$ligne['SprintSpeed']."</td></tr>
<tr><td>Contrôle de balle<td/><td>".$ligne['SprintSpeed']."</td></tr>
<tr><td>Dribble<td/><td>".$ligne['SprintSpeed']."</td></tr>
<tr><td>Calme<td/><td>".$ligne['SprintSpeed']."</td></tr>
<tr><th>DEFENSE</th></tr>
<tr><td>Interception<td/><td>".$ligne['Interceptions']."</td></tr>
<tr><td>Coup de tête<td/><td>".$ligne['HeadingAccuracy']."</td></tr>
<tr><td>Marquage<td/><td>".$ligne['Marking']."</td></tr>
<tr><td>Tacles debouts<td/><td>".$ligne['StandingTackle']."</td></tr>
<tr><td>Tacles glisées<td/><td>".$ligne['SlidingTackle']."</td></tr>
<tr><th>PHYSIQUE</th></tr>
<tr><td>Détente<td/><td>".$ligne['Vision']."</td></tr>
<tr><td>Endurance<td/><td>".$ligne['Crossing']."</td></tr>
<tr><td>Force<td/><td>".$ligne['FKAccuracy']."</td></tr>
<tr><td>Aggression<td/><td>".$ligne['ShortPassing']."</td></tr></table></div>";

echo "<div id='infosJoueurs'><table><tr><th>Informations</th></tr>
<tr><td>Name<td/><td>".$ligne['Name']."</td></tr>
<tr><td>Club<td/><td><img src='".$ligne['Logo']."'/> ".$ligne['Nom']."</td></tr>
<tr><td>Nation<td/><td><img src='".$ligne['Flag']."'/> ".$ligne['name_nationality']."</td></tr>
<tr><td>Skills<td/><td>".$ligne['Skill_Moves']." ★</td></tr>
<tr><td>Mauvais pied<td/><td>".$ligne['Weak_Foot']." ★</td></tr>
<tr><td>Taille<td/><td>".$ligne['Height']."cm</td></tr>
<tr><td>Poids<td/><td>".$ligne['Weight']."kg</td></tr>
<tr><td>Age<td/><td>".$ligne['Age']."ans</td></tr></table>";
}
}
$rep->closeCursor();
?>
</div>
</body>
</html>