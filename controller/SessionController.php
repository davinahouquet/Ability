<?php

namespace Controller;
use Model\Connect; 

class SessionController {

// Aller à la page de choix de connexion
public function connexion(){
    require "view/Connexion/viewConnexion.php";
}

// Formulaire d'inscription
public function register(){

    if(isset($_POST["submitRegister"])){
        $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $couleur = filter_input(INPUT_POST, "couleur", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password1 = filter_input(INPUT_POST, "password1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // var_dump($pseudo);
        // var_dump($couleur);
        // var_dump($email);
        // var_dump($password);
        // var_dump($password1);die;
        if($pseudo && $email && $password && $password1){

            //Si les mots de passe ne sont pas identitques : échec
            if($password !== $password1){
                echo "Failed";
                exit;
            } 

            //S'ils le sont, on hache le mot de passe
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            
            //Et on ajoute l'utilisateur dans la base de données
            $pdo = Connect::seConnecter();
            $requete=$pdo->prepare("INSERT INTO utilisateur (pseudo, couleur, email, password, role)
                                VALUES (:pseudo, :couleur, :email, :password, 'admin')");
            $requete->execute([
                "pseudo"=>$pseudo,
                "couleur"=>$couleur,
                "email"=>$email,
                "password"=>$passwordHash,
            ]);
            // var_dump($passwordHash);die;         
        }
        // On redirige vers la page de connexion
        header("Location: index.php?action=login");
    }
    require "view/Connexion/viewConnexion.php";
}

// Aller à la page de connexion Login
public function login(){

    $pdo = Connect::seConnecter();
    
    if(isset($_POST["submitLogin"])){
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if($email && $password){
            $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
            $requete->execute(["email" => $email]);
            $utilisateur = $requete->fetch();

            if($utilisateur && password_verify($password, $utilisateur['password'])){
                // Connexion réussie
                session_start();
                echo "Login successful!";
                $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur']; // Stockage de l'id_utilisateur dans la session
                $_SESSION['pseudo'] = $utilisateur['pseudo']; // Stockage du nom d'utilisateur dans la session
                $_SESSION['couleur'] = $utilisateur['couleur'];
                header("Location: index.php?action=session");
                exit;
            } else {
                // Identifiants invalides
                echo "Invalid email or password";
            }
        }
    }
    require "view/Connexion/viewLogin.php";
}


    public function session($id){

        $pdo = Connect::seConnecter();
        $requeteSession = $pdo->prepare("SELECT id_utilisateur, pseudo, couleur FROM utilisateur WHERE id_utilisateur = :id");
        $requeteSession->execute(["id"=>$id]);
        // $utilisateur = $requeteSession->fetchAll();
        header("Location: index.php?action=landingPage");
        require("view/User/viewUserSession.php");
    }

    // Se déconnecter
     public function deconnexion(){
        unset($_SESSION["id_utilisateur"]);
        unset($_SESSION["pseudo"]);
        unset($_SESSION["couleur"]);
        session_unset();
        echo "Vous avez été déconnecté";
        header("Location: index.php?action=landingPage");
        exit();
    }
}