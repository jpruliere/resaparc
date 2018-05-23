<?php

require('Manege.php');

class ManegeMapper {

    // Récupère les résultats de la requête SQL sous forme d'objet spécifique
    private function query($pdo, $statement, $class) {
        $req = $pdo->query($statement);
        return $req->fetchAll(PDO::FETCH_CLASS, $class);
    }

    // Récupère les résultats de la requête SQL sous forme d'objet spécifique
    private function prepare($pdo, $statement, $attributs, $class, $one = false) {
        $req = $pdo->prepare($statement);
        $req->execute($attributs);
        // Mise en forme de la récupération : objet spécifique
        $req->setFetchMode(PDO::FETCH_CLASS, $class);
        // Si un seul élément est demandé : récupère un seul élément
        if($one) :
            return $req->fetch();
        // Sinon : récupère tous les éléments
        else :
           return $req->fetchAll();
        endif;
    }

    // Récupère les résultats de la requête SQL sous forme d'objet spécifique
    private function execute($pdo, $statement, $attributs) {
        $req = $pdo->prepare($statement);
        $req->execute($attributs);
        return $req->rowCount();
    }

    public function getList($pdo) {
        $statement = 'SELECT * FROM manege ORDER BY nom ASC;';
        $class     = 'Manege';
        $maneges    = $this->query($pdo, $statement, $class);
        return $maneges;
    }
}

 ?>
