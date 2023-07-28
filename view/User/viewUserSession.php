<?php
ob_start();
$utilisateur = $requeteSession->fetchAll();
?>

    <div class="user-session">
        
        <h2 class="h2-user">
            <?php

            echo $utilisateur["email"];

                if(isset($utilisateur["pseudo"])){
                    echo $utilisateur["pseudo"];
                } else {
                    echo "Log in";
                }
                
            ?></h2>
        
        
    </div>


<?php
    $titre = "Ability";
    $titre_secondaire = "Session";
    $contenu = ob_get_clean();
    require "view/template.php";
?>