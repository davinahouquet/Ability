<?php

//On use les controllers
use Controller\GameController;
use Controller\CategorieController;
use Controller\SessionController;

//On autocharge les classes du projet
spl_autoload_register(function($class_name){
    include $class_name . '.php';
}); 

//On instancie les controller
$ctrlGame = new GameController();
$ctrlCategorie = new CategorieController();
$ctrlSession = new SessionController();

//En fonction de l'action détectée dans l'URL via la propriété "action" on interagit avec la bonne méthode du controller
$id = (isset($_GET["id"])) ? $_GET["id"] : null;
$id_utilisateur = (isset($_SESSION['id_utilisateur'])) ? : null;
if(isset($_GET["action"])){ 
    
    session_start();
    
    switch ($_GET["action"]){

        // Connexion
        case "landingPage" : $ctrlGame->landingPage($id); break; //Page d'accueil, page des jeux
        case "connexion" : $ctrlSession->connexion(); break; //Aller à la page de connexion
        case "register" : $ctrlSession->register(); break; //Inscription
        case "login" : $ctrlSession->login(); break; //Connexion
        case "loginAdmin" : $ctrlSession->loginAdmin(); break; //Aller à la page de connexion Admin
        case "loginSuperAdmin" : $ctrlSession->loginSuperAdmin(); break; //Aller à la page de connexion SuperAdmin

        // Sessions
        case "session" : $ctrlSession->session($id); break; 
        case "deconnexion" : $ctrlSession->deconnexion(); break;
        case "parametre" : $ctrlSession->parametre(); break;
        case "landingPageSuperAdmin" : $ctrlSession->landingPageSuperAdmin(); break;
        case "utilisateurs" : $ctrlSession->utilisateurs();
        case "ajouterUtilisateur" : $ctrlSession->ajouterUtilisateur(); break;
        case "modifierUtilisateur" : $ctrlSession->modifierUtilisateur($id); break;
        case "supprimerUtilisateur" : $ctrlSession->supprimerUtilisateur($id); break;

        // Jeux
        case "jeu" : $ctrlGame->jeu($id); break;
        case "addGame" : $ctrlGame->addGame(); break;
        case "updateGame" : $ctrlGame->updateGame($id); break;
        case "acces" : $ctrlGame->acces($id); break;
        case "lien" : $ctrlGame->lien($id); break;
        // Categories
        case "categorie" : $ctrlCategorie->categorie($id); break;
        case "categoriser" : $ctrlCategorie->categoriser($id); break;
    }
}
?>