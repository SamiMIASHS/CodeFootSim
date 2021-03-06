<!DOCTYPE html>

<html>
<head>
<title>Statistiques</title>
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
        <a href="stats.php">STATISTIQUES</a>
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
<h1>STATISTIQUES</h1>
</div>


<div class="spanStatsJoueurs"><h2>Statistiques par Joueurs</h2></div>

<div class="tablesStatsJoueurs">
<div class="indiv">

<?php
require('../bd.php');
$bdd=getBD();
?>

<br>         
<h3>Accélération</h3>                
<table border="2">
<tr>
  <th>Photo</th>
<th>Joueur</th>
<th>Age</th>
<th>Note</th>
</tr>

 

<?php

                    $sql='select * from joueurs, stats where joueurs.id_joueurs = stats.id_stats and stats.id_stats < 500 and joueurs.id_joueurs < 500 order by Acceleration DESC LIMIT 0,5';

                    $rep = $bdd->query($sql);

                    while($art = $rep -> fetch()) {

                    echo"<tr>";

                    echo"<td><img src='".$art['Photo']."'></td><td><a href=\"../PagesJoueurs/joueursSolo.php?name=".$art['Name']."\">".$art['Name']."</a></td><td>".$art['Age']."</td><td>".$art['Acceleration']."</td>";

                    echo"</tr>";

                    }

$rep ->closeCursor();

?>     

 

                    </table>

                    </div>

                   

                    <div class="indiv">

         

<h3>Finiton </h3>     

                    <table border="2">

                               <tr>

                                                   <th>Photo</th>

                                                   <th>Joueur</th>

                                                   <th>Age</th>

                                                   <th>Note</th>

                               </tr>

 

<?php

                    $sqlF='select * from joueurs, stats where joueurs.id_joueurs = stats.id_stats and stats.id_stats < 500 and joueurs.id_joueurs < 500 order by Finishing DESC LIMIT 0,5';

                    $repF = $bdd->query($sqlF);

                    while($artF = $repF -> fetch()) {

                    echo"<tr>";

                    echo"<td><img src='".$artF['Photo']."'></td><td><a href=\"../PagesJoueurs/joueursSolo.php?name=".$artF['Name']."\">".$artF['Name']."</a></td><td>".$artF['Age']."</td><td>".$artF['Finishing']."</td>";
                    echo"</tr>";

                    }

$repF ->closeCursor();

?>     

 

                    </table>

                    </div>        

         

                    <div class="indiv">

         

                    <h3>Dribble </h3>

                   

                    <table border="2">

                               <tr>

                                                   <th>Photo</th>

                                                   <th>Joueur</th>

                                                   <th>Age</th>

                                                   <th>Note</th>

                               </tr>

 

<?php

                    $sqlD='select * from joueurs, stats where joueurs.id_joueurs = stats.id_stats and stats.id_stats <  500 and joueurs.id_joueurs < 500 order by Dribbling DESC LIMIT 0,5';

                    $repD = $bdd->query($sqlD);

                    while($artD = $repD -> fetch()) {

                    echo"<tr>";

                    echo"<td><img src='".$artD['Photo']."'></td><td><a href=\"../PagesJoueurs/joueursSolo.php?name=".$artD['Name']."\">".$artD['Name']."</a></td><td>".$artD['Age']."</td><td>".$artD['Dribbling']."</td>";
                    echo"</tr>";

                    }

$repD ->closeCursor();

?>     

 

                    </table>

                    </div>        

                   

                              

                    <div class="indiv">

         

                    <h3>Réflexes gardien </h3>

                   

                    <table border="2">

                               <tr>

                                                   <th>Photo</th>

                                                   <th>Joueur</th>

                                                   <th>Age</th>

                                                   <th>Note</th>

                               </tr>

 

<?php

                    $sqlG='select * from joueurs, stats where joueurs.id_joueurs = stats.id_stats and stats.id_stats <  500 and joueurs.id_joueurs < 500 order by GKReflexes DESC LIMIT 0,5';

                    $repG = $bdd->query($sqlG);

                    while($artG = $repG -> fetch()) {

                    echo"<tr>";

                    echo"<td><img src='".$artG['Photo']."'></td><td><a href=\"../PagesJoueurs/joueursSolo.php?name=".$artG['Name']."\">".$artG['Name']."</a></td><td>".$artG['Age']."</td><td>".$artG['GKReflexes']."</td>";

                    echo"</tr>";

                    }

$repG ->closeCursor();

?>     

 

                    </table>
</div>
                    </div>

<br>

                              
<div class="spanStatsJoueurs"><h2>Statistiques par Equipes</h2></div>
<div class="tablesStatsJoueurs">
         

                   

                    <div class="indiv">

 <br>

          <h3>Note moyenne</h3>           

                    <table border="2">

                               <tr>

                                                   <th>Logo</th>

                                                   <th>Club</th>

                                                   <th>Note</th>

                               </tr>

 

<?php

                    $sqlO='select club.Logo, club.Nom, avg(joueurs.Overall) AS Moyenne from joueurs, club where joueurs.Club = club.Nom group by club.Nom order by avg(joueurs.Overall) DESC LIMIT 5 ';

                    $repO = $bdd->query($sqlO);

                    while($artO = $repO -> fetch()) {

                    echo"<tr>";

                    echo"<td><img src='".$artO['Logo']."'alt='".$artO['Nom']."'</td><td>".$artO['Nom']."</td><td>".$artO['Moyenne']."</td>";

                    echo"</tr>";

                    }

$repO ->closeCursor();

?>     

 

                    </table>

                    </div>

                   

                    <div class="indiv">

 

          <h3>Moyenne par championnat </h3>          

                    <table border="2">

                               <tr>

                                                   <th>Championnat</th>

                                                   <th>Note</th>

                               </tr>

 

<?php

                    $sqlO='select club.Championnat, avg(joueurs.Overall) AS Moyenne from joueurs, club where joueurs.Club = club.Nom group by club.Championnat order by avg(joueurs.Overall) DESC LIMIT 5';

                    $repO = $bdd->query($sqlO);

                    while($artO = $repO -> fetch()) {

                    echo"<tr>";

                    echo"<td>".$artO['Championnat']."</td><td>".$artO['Moyenne']."</td>";

                    echo"</tr>";

                    }

$repO ->closeCursor();

?>     

 

                    </table>

                    </div>        

         

                    <div class="indiv">

         

                    <h3>Valeurs des joueurs </h3>

                   
                   <table border="2">

                               <tr>

                                                   <th>Logo</th>

                                                   <th>Club</th>

                                                   <th>Prix (en M)</th>

                               </tr>

 

<?php

                    $sqlO='select club.Logo, club.Nom, sum(joueurs.Value) AS Valeur from joueurs, club where joueurs.Club = club.Nom group by club.Nom order by sum(joueurs.Value) DESC LIMIT 5 ';

                    $repO = $bdd->query($sqlO);

                    while($artO = $repO -> fetch()) {

                    echo"<tr>";

                    echo"<td><img src='".$artO['Logo']."'alt='".$artO['Nom']."'</td><td>".$artO['Nom']."</td><td>".$artO['Valeur']."</td>";

                    echo"</tr>";

                    }

$repO ->closeCursor();

?>     

 

                    </table>

                    </div>        

                   

                              

                    <div class="indiv">

         

                    <h3>Précision Coup-franc</h3>

                   
                   
                   <table border="2">

                               <tr>

                                                   <th>Logo</th>

                                                   <th>Club</th>

                                                   <th>Note</th>

                               </tr>

 

<?php

                    $sqlO='select club.Logo, club.Nom, avg(joueurs.Skill_Moves) AS Skills from joueurs, club where joueurs.Club = club.Nom and club.Championnat ="Liga" OR club.Championnat = "Premier League" group by club.Nom order by avg(joueurs.Skill_Moves) DESC LIMIT 5 ';

                    $repO = $bdd->query($sqlO);

                    while($artO = $repO -> fetch()) {

                    echo"<tr>";

                    echo"<td><img src='".$artO['Logo']."'alt='".$artO['Nom']."'</td><td>".$artO['Nom']."</td><td>".$artO['Skills']."</td>";

                    echo"</tr>";

                    }

$repO ->closeCursor();

?>     

 

                    </table>

                    </div>
</div>
         
<br>
 

          </body>    

          </html>