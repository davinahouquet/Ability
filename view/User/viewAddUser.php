<?php
ob_start();
?>

<section class="paramètres">

    <h1>Ajouter un utilisateur</h1>
    
    <form enctype='multipart/form-data' action="index.php?action=ajouterUtilisateur" method="post" class="connexion-form">

    <br>
        <div class="form-input">
            <label for="pseudo">Prénom de l'utilisateur</label>
            <input type="text" name="pseudo">
            <input type="color" name="color" id="color">

            <input name="submitUser" type="submit" class="submit-button" value="Ajouter">
        </div>
    </form>
    
</section>

<?php
$titre = "Ability";
$titre_secondaire = "Ajout Utilisateur";
$contenu = ob_get_clean();
require "view/template.php";
?> 