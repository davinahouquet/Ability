<?php

namespace Controller;
use Model\Connect;

class CategorieController {

    public function categorie(){
        $pdo = Connect::seConnecter();
        
        $requeteCategorie = $pdo->query("
            SELECT id_categorie, nom_categorie, image_categorie FROM categorie
        ");
        
       require ("view/Categorie/viewCategorie.php");
    }

    public function categoriser($id){
        $pdo = Connect::seConnecter();

        $requeteCategoriser = $pdo->prepare("
        SELECT categorie.id_categorie, categorie.nom_categorie, j.id_jeu, j.nom_jeu, j.consigne, j.image FROM jeu j
        JOIN categoriser c ON c.id_jeu = j.id_jeu
        JOIN categorie ON categorie.id_categorie = c.id_categorie
        WHERE categorie.id_categorie = :id
        ");
        $requeteCategoriser->execute(["id" => $id]);

        $requeteJeu = $pdo->query("
        SELECT id_jeu, nom_jeu, consigne, image FROM jeu
        ");
        // $requeteJeu->execute(["id" => $id]);
        require ("view/Categorie/viewDetailCategorie.php");
    }
}

?>