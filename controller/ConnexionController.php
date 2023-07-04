<?php

namespace Controller;
use Model\Connect; //On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

class ConnexionController {

    // Aller à la page de connexion
    public function connexion(){
        require ("view/Connexion/viewConnexion.php"); //On relie par un "require" la vue qui nous intéresse (située dans le dossier "view")
    }
}