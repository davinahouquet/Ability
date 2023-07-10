<?php

namespace Controller;
use Model\Connect; 

class SessionController {
    $pdo = Connect::seConnecter();
    $requeteSession = $pdo->query("");

    require("view/User/viewUserSession.php");
}