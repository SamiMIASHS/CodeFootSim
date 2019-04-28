<!DOCTYPE html>
<html>
<head>
<?php
require('../bd.php');
$bdd=getBD();
?>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<script type="text/javascript" src="code.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<title>SIMULATION</title>
<meta charset="UTF-8">
<script>
$(document).ready(function() {
$(".jj1").click(function(){
	var j=$("#j1");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj2").click(function(){
	var j=$("#j2");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj3").click(function(){
	var j=$("#j3");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj4").click(function(){
	var j=$("#j4");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj5").click(function(){
	var j=$("#j5");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj6").click(function(){
	var j=$("#j6");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj7").click(function(){
	var j=$("#j7");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj8").click(function(){
	var j=$("#j8");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj9").click(function(){
	var j=$("#j9");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj10").click(function(){
	var j=$("#j10");
			j.html($(this));
		}
);
});

$(document).ready(function() {
$(".jj11").click(function(){
	var j=$("#j11");
			j.html($(this));
		}
);
});
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
<h1>SIMULATION - Equipes personnalisées</h1>
</div>

<div class="equipe1">
<p> - EQUIPE 1 -</p><br>

<p>Composez votre équipe !</p><br>
<form method="POST" action="simulationperso.php" autocomplete="off">
<SELECT name="compositions">
<OPTION VALUE="4-3-3">4-3-3</OPTION>
<OPTION VALUE="4-4-2">4-4-2</OPTION>
<OPTION VALUE="3-5-2">3-5-2</OPTION>
</SELECT>

<p><input id="btEnvoyerEquipe1" type="submit" value="Envoyer"></p><br>
</form>

<?php
if(isset($_POST['compositions'])){
echo $_POST['compositions'];
echo "</br>";
}
if(isset($_POST['compositions'])){
if($_POST['compositions']=="4-3-3" ) {
	echo'<button class="bouton" id="bouton_texte0" onclick="afficher_cacher(\'texte0\');">G</button>';
	echo'<button class="bouton" id="bouton_texte1" onclick="afficher_cacher(\'texte1\');">DG</button>';
	echo'<button class="bouton" id="bouton_texte2" onclick="afficher_cacher(\'texte2\');">DC</button>';
	echo'<button class="bouton" id="bouton_texte3" onclick="afficher_cacher(\'texte3\');">DC</button>';
	echo'<button class="bouton" id="bouton_texte4" onclick="afficher_cacher(\'texte4\');">DD</button>';
	echo'<button class="bouton" id="bouton_texte5" onclick="afficher_cacher(\'texte5\');">MC</button>';
	echo'<button class="bouton" id="bouton_texte6" onclick="afficher_cacher(\'texte6\');">MC</button>';
	echo'<button class="bouton" id="bouton_texte7" onclick="afficher_cacher(\'texte7\');">MC</button>';
	echo'<button class="bouton" id="bouton_texte8" onclick="afficher_cacher(\'texte8\');">AG</button>';
	echo'<button class="bouton" id="bouton_texte9" onclick="afficher_cacher(\'texte9\');">AD</button>';
	echo'<button class="bouton" id="bouton_texte10" onclick="afficher_cacher(\'texte10\');">BU</button>';

}

elseif ($_POST['compositions']=="4-4-2") {
	echo'<button class="bouton" id="bouton_texte0" onclick="afficher_cacher(\'texte0\');">G</button>';
	echo'<button class="bouton" id="bouton_texte1" onclick="afficher_cacher(\'texte1\');">DG</button>';
	echo'<button class="bouton" id="bouton_texte2" onclick="afficher_cacher(\'texte2\');">DC</button>';
	echo'<button class="bouton" id="bouton_texte3" onclick="afficher_cacher(\'texte3\');">DC</button>';
	echo'<button class="bouton" id="bouton_texte4" onclick="afficher_cacher(\'texte4\');">DD</button>';
	echo'<button class="bouton" id="bouton_texte11" onclick="afficher_cacher(\'texte11\');">MDC</button>';
	echo'<button class="bouton" id="bouton_texte12" onclick="afficher_cacher(\'texte12\');">MDC</button>';
	echo'<button class="bouton" id="bouton_texte13" onclick="afficher_cacher(\'texte13\');">MG</button>';
	echo'<button class="bouton" id="bouton_texte14" onclick="afficher_cacher(\'texte14\');">MD</button>';
	echo'<button class="bouton" id="bouton_texte15" onclick="afficher_cacher(\'texte15\');">BU</button>';
	echo'<button class="bouton" id="bouton_texte10" onclick="afficher_cacher(\'texte10\');">BU</button>';
	
	
}
else {
	echo'<button class="bouton" id="bouton_texte0" onclick="afficher_cacher(\'texte0\');">G</button>';
	echo'<button class="bouton" id="bouton_texte2" onclick="afficher_cacher(\'texte2\');">DC</button>';
	echo'<button class="bouton" id="bouton_texte3" onclick="afficher_cacher(\'texte3\');">DC</button>';
	echo'<button class="bouton" id="bouton_texte16" onclick="afficher_cacher(\'texte16\');">DC</button>';
	echo'<button class="bouton" id="bouton_texte13" onclick="afficher_cacher(\'texte13\');">MG</button>';
	echo'<button class="bouton" id="bouton_texte5" onclick="afficher_cacher(\'texte5\');">MC</button>';
	echo'<button class="bouton" id="bouton_texte6" onclick="afficher_cacher(\'texte6\');">MC</button>';
	echo'<button class="bouton" id="bouton_texte14" onclick="afficher_cacher(\'texte14\');">MD</button>';
	echo'<button class="bouton" id="bouton_texte17" onclick="afficher_cacher(\'texte17\');">MOC</button>';
	echo'<button class="bouton" id="bouton_texte15" onclick="afficher_cacher(\'texte15\');">BU</button>';
	echo'<button class="bouton" id="bouton_texte10" onclick="afficher_cacher(\'texte10\');">BU</button>';
	
	}}
?>
<br>
</div>




<div class="texte" id="texte0">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "GK" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj1'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte1">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "LB" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj2'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte2">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CB" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj3'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte3">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CB" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj4'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte4">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "RB" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj5'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte5">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CM" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj6'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte6">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CM" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj7'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte7">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CM" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj8'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte8">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "LW" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj9'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte9">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "RW" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj10'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte10">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "ST" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj11'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte11">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CDM" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj6'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte12">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CDM" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj7'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte13">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "LM" LIMIT 5' );
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj8'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte14">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "RM" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj9'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte15">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "ST" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj10'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte16">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CB" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj2'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="texte" id="texte17">
<table>
<th> 
<td> Nom </td>
<td> Note </td>
</th>
<?php $req = $bdd->query('select Photo,Name,Overall from joueurs where position = "CAM" LIMIT 5');
while ($ligne = $req ->fetch()) {
	echo"<tr class='j'>";
	echo"<td><img src='".$ligne['Photo']."' alt='".$ligne['Name']."' width='20px' heigth='20px'></td><td><p class='jj9'>".$ligne['Name']."</p></td><td>".$ligne['Overall']."</td>";
	echo"</tr>";
	}
?>
</table>
</div>

<div class="equipePerso1affiche">
<p id="j1" class="j"> </p>
<p id="j2" class="j"> </p>
<p id="j3" class="j"> </p>
<p id="j4" class="j"> </p>
<p id="j5" class="j"> </p>
<p id="j6" class="j"> </p>
<p id="j7" class="j"> </p>
<p id="j8" class="j"> </p>
<p id="j9" class="j"> </p>
<p id="j10" class="j"> </p>
<p id="j11" class="j"> </p>
</div>

<br>




<!--
<div class='formBTvalider'>
<form id='valide' action='#' method='post'>
<input type='submit' value='Valider' id='btValider' />
</form>
</div>
-->




</body>
</html>