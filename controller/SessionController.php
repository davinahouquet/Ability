<?php

namespace Controller;
use Model\Connect; 

class SessionController {

    public function session(){
        $pdo = Connect::seConnecter();
        $requeteSession = $pdo->query("");
    
        require("view/User/viewUserSession.php");
    }
}