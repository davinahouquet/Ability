<?php
ob_start();
?>

<section class="paramètres">

    <h1>Paramètres</h1>
    
    <div class="choix-utilisateur">
        <?php
        if(isset($compte['pseudo'])){
            foreach($requete->fetchAll() as $utilisateur){
                if($utilisateur['role'] == 'utilisateur'){
                    echo "<div class='couleur-et-utilisateur'><input type='color' name='newColor' class='user-color 'style='background-color:".$utilisateur['couleur']."'> ". $utilisateur['pseudo']."<div class='operation'><i class='fa-solid fa-pen'></i><i class='fa-solid fa-trash'></i></div></div>";
                }
            }
        } else {
            echo 'Error';
        }
        ?>
    </div>
</section>

<?php
$titre = "Ability";
$titre_secondaire = "Paramètres";
$contenu = ob_get_clean();
require "../../view/template.php";
?> 