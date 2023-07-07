<?php

namespace Controller;
use Model\Connect;

class GameController {

    //Page d'accueil
    public function landingPage(){
        $pdo = Connect::seConnecter();
        $requeteJeu = $pdo->query("
            SELECT id_jeu, nom_jeu, consigne, image FROM jeu ORDER BY rand()
        ");

        // $requeteCategorie = $pdo->prepare("
        //     SELECT nom_categorie FROM categorie
        //     JOIN categoriser ON categoriser.id_categorie = categorie.id_categorie
        //     JOIN jeu ON jeu.id_jeu = categorie.id_categorie
        //     WHERE jeu.id_jeu = :id
        // ");
        // $requeteCategorie->execute(["id" => $id]);
       require ("view/LandingPage/viewLandingPage.php");
    }
}

?>