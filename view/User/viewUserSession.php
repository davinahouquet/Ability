<?php
ob_start();
// $session = $requeteSession->fetchAll();
?>

    <div class="user-session">
        
        <h2 class="h2-user">
            <?php
                if(isset($_SESSION["pseudo"])){
                    echo $_SESSION["pseudo"];
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