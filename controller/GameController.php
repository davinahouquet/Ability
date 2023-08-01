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

    // 
    public function jeu(){
        $pdo = Connect::seConnecter();
        $requeteJeu = $pdo->prepare("
            SELECT id_jeu, nom_jeu, consigne, image FROM jeu WHERE id_jeu = :id
        ");
        $requeteJeu->execute(["id" => $id]);
    }

    // Ajouter un jeu
    public function addGame(){

        $pdo = Connect::seConnecter();

        if(isset($_POST["submitGame"])){   
            
            if(isset($_FILES["image"])){ // Le nom de l'input dans viewAddGame
                $tmpName = $_FILES["affiche"]["tmp_name"];
                $name = $_FILES["affiche"]["name"];
                $size = $_FILES["affiche"]["size"];
                $error = $_FILES["affiche"]["error"];
                $tabExtension = explode(".", $name);
                $extension = strtolower(end($tabExtension));
                $extensions = ["jpg", "png", "jpeg"];
                $maxTaille = 4000000;
                /* Les extensions + taille de fichier autorisées */
                if(in_array($extension, $extensions) && $size <= $maxTaille && $error == 0){
                    $uniqueName = uniqid("", true);
                    $fileUnique = $uniqueName . "." . $extension;
                    move_uploaded_file($tmpName, "./public/img/".$fileUnique); 
                    $afficheChemin = "./public/img/" . $fileUnique;
                }         
                else {
                    /* S'il n'y pas de fichier (NULL autorisé dans la BDD)*/
                    $afficheChemin = NULL;
                }
    
                $nom_jeu = filter_input(INPUT_POST, "nom_jeu", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $consigne = filter_input(INPUT_POST, "consigne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $categorie = filter_input(INPUT_POST, "categorie", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $image = filter_input(INPUT_POST, "image", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $code = filter_input(INPUT_POST, "code", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


                $requeteJeu = $pdo->prepare("
                    INSERT INTO jeu (id_jeu, nom_jeu, consigne, image, code)  VALUES (:id_jeu, :nom_jeu, :consigne, :image, :code)
                ");
                $requeteJeu->execute([
                    "id_jeu" => $id_jeu,
                    "nom_jeu" => $nom_jeu,
                    "consigne" => $consigne,
                    "image" => $image,
                    "code" => $code
                ]);

                $requeteCategorie = $pdo->query("SELECT id_categorie, nom_categorie FROM categorie");
                $requeteCategorie->execute();

                $selectedCategorie = isset($_POST["categorie"]) ? $_POST["categorie"] : [];

                foreach ($selectedCategorie as $categorie) {
                    $requeteCategoriser = $pdo->prepare("INSERT INTO categoriser (id_jeu, id_categorie) VALUES (LAST_INSERT_ID(), :id_categorie)");
                    $requeteCategoriser->execute([
                        "id_categorie" => $categorie
                    ]);
                }
                header("Location: index.php?action=landingPage");
            }
        }
        require("view/Jeu/viewAddGame.php");
    }
        
}

?>