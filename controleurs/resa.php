<?php
include_once("resa.mapper.php");

$num_billet="123456";

$aff = new ResaMapper;

// $aff->newResa(2, "16:57:00", $num_billet);
// $aff->newResa(2, "17:00:00", $num_billet);
// $aff->newResa(2, "16:54:00", $num_billet);

// $aff->annulResa(21);

$alertResa = $aff->alertResa($num_billet);

$mesResa = $aff->affResa($num_billet);

echo "<p>Alerte : ". $alertResa[0]->getId()." : manege n°".$alertResa[0]->getId_manege()." à ".$alertResa[0]->getHoraire()."</p>";

foreach($mesResa as $resa){
	echo $resa->getId()." : manege n°".$resa->getId_manege()." à ".$resa->getHoraire()."<br>";	
}
