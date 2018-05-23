<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Welcome to Unicorn Park</title>
		
		<style>
			html {
				font-family: Arial, Verdana, sans-serif;
			}
			h1, h2 {
				margin: auto;
				text-align: center;
			}
			h1 {
				color: limegreen;
			}
			.items, a {
				margin: 10px;
			}
			fieldset {
				margin: 20px auto;
			}
			#numBillet {
				border: 1px solid red;
				padding: 5px;
			}
			
		</style>
		
		<?php require_once('bdd_connect.php'); ?>
		
		<?php
		$manege = ["Manège 1", "Manège 2", "Manège 3", "Manège 4", "Manège 5", "Manège 6"];
		$numBillet = '0000 000584760426132';
		?>
		
	</head>
	<body>
			<header>
				<span id="numBillet">
					<?php echo "Billet n° : ".$numBillet;  ?>
				</span>
			
				<h1>Unicorn Park</h1>
				
				<nav>
					<a href="?manege">Nos Attractions</a>
					<a href="?reservation">Vos réservations</a>
				</nav>
				
			</header>
			<main>
				
				<fieldset>
				<?php
				
					if(isset($_GET['reservation'])){
						include('reservation.php');
					} else if(isset($_GET['manege']) || empty($_GET)){
						include('attractions.php');
					}
					
				?>
				</fieldset>
				
			</main>
	</body>		
</html>
