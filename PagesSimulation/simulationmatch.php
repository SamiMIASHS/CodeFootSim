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
<style>#cible {
     margin-top: 2%;
      width : 60%;
      margin-left: auto;
      margin-right: auto;
      padding-left: 10%;
padding-top: 1%;
padding-bottom: 1%;

      border : 2px dashed #558;
      color : #008;
      background-color: #fff;
      }</style>
      
       <script type="text/javascript">
    function afficheContenu() {
      var cible = document.getElementById('cible');
      if(cible.style.display != '') {
        cible.style.display = '';
      } else {
        cible.style.display = 'none';
      }
    }
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
<h1>SIMULATION - Match</h1>
</div>


<?php 


if(isset($_SESSION['team1']) && isset($_SESSION['team2'])){
$vainqueur = "";
$moyNote1 = $bdd->query('select avg(Overall) from joueurs where club = "' . $_SESSION["team1"].'"');
$moyNote2 = $bdd->query('select avg(Overall) from joueurs where club = "' . $_SESSION["team2"].'"');	

if($moyNote1 > $moyNote2){$vainqueur = $_SESSION['team1'];}
else{$vainqueur = $_SESSION['team2'];}


 echo "<div class='equipe1match'> " .$_SESSION['team1']. "</div>";
 echo "<div class='vs'> VS </div>";
 echo "<div class='equipe2match'> " .$_SESSION['team2']. "</div>";
 
 echo "<table id='table1'>";
echo "<tr>";
echo "<th></th>";
echo "<th>Nom</th>";
echo "<th>Note</th>";
echo "<tr>";
$req1 = $bdd->query('select Photo,Name,Overall from joueurs where club = "'.$_SESSION["team1"].'" LIMIT 11');
while ($ligne = $req1 ->fetch()) {
	echo"<tr>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='15px' heigth='15px'></td><td>".$ligne['Name']."</td><td>".$ligne['Overall']."</td>";
	echo"</tr>";}
echo "</table>";


echo "<table id='table2'>";
echo "<tr>";
echo "<th></th>";
echo "<th>Nom</th>";
echo "<th>Note</th>";
echo "<tr>";
$req2 = $bdd->query('select Photo,Name,Overall from joueurs where club = "'.$_SESSION['team2'].'" LIMIT 11');
while ($ligne = $req2 ->fetch()) {
	echo"<tr>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='15px' heigth='15px'></td><td>".$ligne['Name']."</td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}}
echo "</table>";


echo "<p class='btJouer'><button type='button'  onclick='afficheContenu()'> JOUER </button></p>";




echo "<div id='cible' style='display:none;'>
    <p>Vainqueur du match potentiel : ". $vainqueur . "</p>
    </div>";
    


?>


</body>
</html>
