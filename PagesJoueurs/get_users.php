<?php
 
include('bdsearch.php');            

$sql = "select Name, Photo from joueurs where Name like '%".$_POST['name']."%' limit 5";
$array = $bdd->query($sql);

foreach($array as $key) {
?>

<div id="user">
<img width="50px" height="50px" src="<?php echo $key['Photo']?>" id="pic" />&nbsp;<span>
<?php echo "<a id='lienSearch' href='joueursSolo.php?name=".$key['Name']."'>".$key['Name']."</a>" ?></span></div>

<?php

}

?>


 