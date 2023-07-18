<?php

namespace Controller;
use Model\Connect; 

class SessionController {

    public function session(){
        require("view/User/viewUserSession.php");
    }
}