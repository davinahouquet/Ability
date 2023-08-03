<?php
ob_start();
$compte = $requete->fetchAll();
?>

<div class="paramètres">

    <h1>Paramètres</h1>
    
    <div class="choix-utilisateur">
        <?php
            foreach($compte as $utilisateur){
                if($utilisateur['role'] == 'utilisateur'){
                    echo "<div class='couleur-et-utilisateur'><div class='user-color 'style='background-color:".$utilisateur['couleur']."'></div> ". $utilisateur['pseudo']."<i class='fa-solid fa-pen'></i><i class='fa-solid fa-trash'> </i></div>";
                }
            }
        ?>
    </div>
</div>

<?php
$titre = "Ability";
$titre_secondaire = "Paramètres";
$contenu = ob_get_clean();
require "view/template.php";
?>