<?php

namespace Controller;
use Model\Connect;

class CategorieController {

    public function categorie(){
        $pdo = Connect::seConnecter();
        $requeteCategorie = $pdo->query("
            SELECT nom_categorie, image_categorie FROM categorie
        ");
       require ("view/Categorie/viewCategorie.php");
    }

}

?>