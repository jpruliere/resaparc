<?php
include_once("resa.mapper.php");



$num_billet="123456";

$aff = new ResaMapper;
//$aff->alertResa($num_billet);

//$aff->newResa(2, "15:00:00", "125112");
//$aff->newResa(2, "16:00:00", $num_billet);
//$aff->newResa(2, "16:11:00", $num_billet);
//$aff->newResa(2, "16:26:00", $num_billet);
//$aff->newResa(2, "16:30:00", $num_billet);
//$aff->newResa(2, "15:15:00", $num_billet);
//$aff->newResa(2, "16:36:00", $num_billet);

//$aff->annulResa(21);

$mesResa = $aff->affResa($num_billet);

foreach($mesResa as $resa){
	echo $resa->getId()." : manege n°".$resa->getId_manege()." à ".$resa->getHoraire()."<br>";	
}
