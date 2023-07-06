<?php

namespace Controller;
use Model\Connect; //On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

class ConnexionController {

    public function register(){

        if(isset($_POST["submitRegister"])){

            $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password1 = filter_input(INPUT_POST, "password1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($pseudo && $email && $password && $password1){

                //Si les mots de passe ne sont pas identitques
                if($password !== $password1){
                    echo "Failed";
                    exit;
                } 

                //S'ils le sont, on hache le mot de passe
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    
                //Et on ajoute l'utilisateur dans la base de données
                $requete=$pdo->prepare("INSERT INTO utilisateur (pseudo, email, password)
                                    VALUES (:pseudo, :email, :password)");
                $requete->execute([
                    "pseudo"=>$pseudo,
                    "email"=>$email,
                    "password"=>$passwordHash,
                ]);
                // var_dump($passwordHash);die;         
            }
            header("Location:index.php?action=login");
            require ("view/Connexion/viewConnexion.php");
        }
    }
    // Aller à la page de connexion
    public function connexion(){
        require ("view/Connexion/viewConnexion.php"); //On relie par un "require" la vue qui nous intéresse (située dans le dossier "view")
    }
    
    // Aller à la page de connexion Login
    public function login(){
        require("view/Connexion/viewLogin.php");
        header("Location:index.php?action=login");
    }
}