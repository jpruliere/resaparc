<h1>Connexion</h1>

<?php
if(isset($_GET["message"])) :
?>
<p><?=$_GET["message"]?></p>
<?php
endif;
?>
<form action="../controleurs/controlBillet.php" method="get">

	Votre numéro de billet : <input type="text" name="billet"><br>
	<input type="submit" value="Connexion">

</form>
