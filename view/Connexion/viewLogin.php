<?php
ob_start();
?>

<div class="connexion-container-form">

        <form enctype='multipart/form-data' action="index.php?action=login>" method="post" class="connexion-form">
        
            <h1>Se connecter</h1>

            <div class="form-input">
                <label for="account-name">Adresse Mail</label>
                <input type="text" placeholder="Groupe vert" name="account-name" value="">
            </div>
            <div class="form-input">
                <label for="password">Mot de passe</label>
                <input type="email" placeholder="Last Name" name="nom" value="">
            </div>
            <div class="button-container">
                <input type="submit" name="login" class="submit-button">
            </div>
        </form>
        
    </div>

<?php
$titre = "Connexion";
$contenu = ob_get_clean();
require "view/template.php";