<?php

namespace Controller;
use Model\Connect;

class GameController {

    //Retour à la page d'accueil
    public function landingPage(){
       require ("view/LandingPage/viewLandingPage.php");
    }
}

?>