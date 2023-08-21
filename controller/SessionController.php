<?php

namespace Controller;
use Model\Connect; 

class SessionController {

    // Affichage des utilisateurs dans le dropdown de la barre de navigation
    // public function utilisateurs(){

    //     $pdo = Connect::seConnecter();

    //     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    //     $requeteUtilisateur = $pdo->prepare("SELECT id_utilisateur, pseudo, couleur FROM utilisateur WHERE email = :email");
    //     $requeteUtilisateur->execute(["email"=>$email]);
        
    //     $compte = $requeteUtilisateur->fetchAll();

    //     require "view/template.php";
    // }

    // Aller à la page de choix de connexion
    public function connexion(){
        require "view/Connexion/viewInscription.php";
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
                    echo "Connexion réussie";
                        $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur']; // Stockage de l'id_utilisateur dans la session
                        $_SESSION['pseudo'] = $utilisateur['pseudo']; // Stockage du nom d'utilisateur dans la session
                        $_SESSION['couleur'] = $utilisateur['couleur'];
                    header("Location: index.php?action=session");
                    exit;
                } else {
                    // Identifiants invalides
                    echo "Identifiant ou mot de passe invalide";
                }
            }
        }
        // require "view/Connexion/viewConnexion.php";
        require "view/Connexion/viewLogin.php";
    }

    public function session($id){

        $pdo = Connect::seConnecter();
        $requeteSession = $pdo->prepare("SELECT id_utilisateur, pseudo, couleur FROM utilisateur WHERE id_utilisateur = :id");
        $requeteSession->execute(["id"=>$id]);
        // $utilisateur = $requeteSession->fetchAll();
        header("Location: index.php?action=landingPage");
        require "view/User/viewUserSession.php";
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

    // Choix utilisateurs
    public function utilisateur(){
        $pdo = Connect::seConnecter();
        $requeteUtilisateur = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $requeteUtilisateur->execute(["email"=>$email]);

        require "view/User/viewChoixUser.php";
    }

    // Aller à la page de connexion de l'admin
    public function loginAdmin(){
        require "view/Connexion/viewAdminConnexion.php";
    }

    // Aller à la page de connexion du SuperAdmin
    public function loginSuperAdmin(){
        require "view/Connexion/viewSuperAdminConnexion.php";
    }

    // Accès aux paramètres
    public function parametre(){

        $pdo = Connect::seConnecter();
        
        if(isset($_POST["submitAdmin"])){
            
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($email && $password){
                $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
                $requete->execute(["email" => $email]);

                $utilisateur = $requete->fetch();
                // Pas besoin de && $utilisateur['role'] == 'admin' car on admet que si la personne connaît l'email + mdp c'est adapté
                if($utilisateur && password_verify($password, $utilisateur['password'])){
                    // Connexion réussie
                    session_start();
                    echo "Connexion réussie";
                        $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur']; // Stockage de l'id_utilisateur dans la session
                        $_SESSION['pseudo'] = $utilisateur['pseudo']; // Stockage du nom d'utilisateur dans la session
                        $_SESSION['email'] = $utilisateur['email'];
                        $_SESSION['couleur'] = $utilisateur['couleur'];
                    header("Location: index.php?action=parametre");
                    exit;
                } else {
                    // Identifiants invalides
                    echo "Identifiant ou mot de passe invalide";
                    header("Location: index.php?action=loginAdmin");
                }
            }
        }
        // $email = $_SESSION["email"];
        $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $requete->execute(["email"=>$email]);

        require "view/User/viewParametres.php";
    }

    // Vue après connexion du SuperAdmin
    public function landingPageSuperAdmin(){
        $pdo = Connect::seConnecter();

        $requeteJeu = $pdo->query("
            SELECT id_jeu, nom_jeu, consigne, image FROM jeu ORDER BY rand()
        ");
    
        require "view/user/viewLandingPageSuperAdmin.php";
    }

    // Fonction qui permet d'ajouter un utilisateur
    public function ajouterUtilisateur(){

        if(isset($_POST["submitUser"])){

            $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $couleur = filter_input(INPUT_POST, "couleur", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($pseudo && $couleur){
                
                $pdo = Connect::seConnecter();

                $requeteAddUser = $pdo->prepare("INSERT INTO utilisateur (id_utilisateur, pseudo, couleur, email, ROLE) VALUES (:id, :pseudo, :couleur, :email, 'utilisateur')");
                $requeteAddUser->execute([
                    "id"=>$id,
                    "pseudo"=>$pseudo,
                    "couleur"=>$couleur,
                    "email"=>$_SESSION['email']
                ]);
            }
            header("Location: index.php?action=parametre");
        }
        require "view/User/viewAddUser.php";
    }

    // Fonction qui permet de modifier un nom d'utilisateur (Vue paramètres)
    public function modifierUtilisateur($id){

        $pdo = Connect::seConnecter();

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $requete->execute(["email"=>$email]);

        // $requeteModifierUtilisateur = $pdo->prepare("
           
        // ");
        // $requeteModifierUtilisateur->execute([""]);

        require "view/User/viewUpdatePseudo.php";
    }

    // Fonction qui permet de supprimer un utilisateur (Vue paramètres)
    public function supprimerUtilisateur($id){

        $pdo = Connect::seConnecter();
        // D'abord supprimer de la table progresser
        // $requeteSupprimerProgresser = $pdo->prepare("
        //     DELETE FROM progresser
        //     WHERE id_utilisateur = :id
        // ");
        // $requeteSupprimerProgresser->execute(["id"=>$id]);

        $requeteSupprimerUtilisateur = $pdo->prepare("
            DELETE FROM utilisateur
            WHERE id_utilisateur = :id
        ");
        $requeteSupprimerUtilisateur->execute(["id"=>$id]);

        header("Location: index.php?action=parametre");
        require "view/User/viewParametres.php";
    }

}