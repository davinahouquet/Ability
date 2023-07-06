<?php

//On use les controllers
use Controller\GameController;
use Controller\CategorieController;
use Controller\ConnexionController;

//On autocharge les classes du projet
spl_autoload_register(function($class_name){
    include $class_name . '.php';
}); 

//On instancie les controller
$ctrlGame = new GameController();
$ctrlConnexion = new ConnexionController();
$ctrlCategorie = new CategorieController();

//En fonction de l'action détectée dans l'URL via la propriété "action" on interagit avec la bonne méthode du controller
$id = (isset($_GET["id"])) ? $_GET["id"] : null;
$id_utilisateur = (isset($_SESSION['id_utilisateur'])) ? : null;
if(isset($_GET["action"])){ 
    
    session_start();
    
    switch ($_GET["action"]){

        //Connexion
        case "landingPage" : $ctrlGame->landingPage(); break;
        case "connexion" : $ctrlConnexion->connexion(); break; //Aller à la page de connexion
        case "signin" : $ctrlConnexion->register(); break; //Inscription
        case "login" : $ctrlConnexion->login(); break; //Connexion

        // Categories
        case "categorie" : $ctrlCategorie->categorie(); break;

    }
}
?>