<?php
function getBD(){

$bdd = new PDO('mysql:host=localhost;dbname=projetfootsim;charset=utf8',
'root', 'root');
return $bdd;
}
?>