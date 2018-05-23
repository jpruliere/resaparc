<?php
// utilisation de postgreSQL 10
// utilisateur
$user="php";
// mot de passage
$pass="";
// nom de la base de donnée
$dbName = "reservaparc";

$dsn = "pgsql:dbname=".$dbName.";host=localhost";

// connection à la base de données
$pdo = new PDO($dsn, $user, $pass);

// active les message d'erreurs de la base de données
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
