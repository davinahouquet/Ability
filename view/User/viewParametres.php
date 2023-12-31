<?php
ob_start();
$compte = $requete->fetchAll();
?>

<section class="paramètres">

    <h1>Paramètres</h1>
    
    <button class="parametre-button"><a href="index.php?action=ajouterUtilisateur">Ajouter un utilisateur</a></button>
    <div class="choix-utilisateur">
        <?php
            foreach($compte as $utilisateur){
                if($utilisateur['role'] == 'utilisateur'){
                    echo "<div class='couleur-et-utilisateur'><div class='user-color 'style='background-color:".$utilisateur['couleur']."'></div> ". $utilisateur['pseudo']."<div class='operation'><a href='#'><i class='fa-solid fa-pen'></i></a><a href='index.php?action=supprimerUtilisateur'><i class='fa-solid fa-trash'></i></a></div></div>";
                } else{
                    echo "Aucun utilisateur enregistré pour le moment";
                }
            }
        ?>
    </div>
</section>

<?php
$titre = "Ability";
$titre_secondaire = "Paramètres";
$contenu = ob_get_clean();
require "view/template.php";
?> 