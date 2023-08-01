<?php
ob_start();
?>

<div class="login-container-form">

        <form enctype='multipart/form-data' action="index.php?action=login" method="post" class="connexion-form">
        
            <h1>Se connecter</h1>

            <div class="form-input">
                <label for="account-name">Adresse Mail</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-input">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <div class="button-container">
                <input type="submit" name="submitLogin" class="submit-button">
            </div>
        </form>
        
    </div>

<?php
$titre = "Connexion";
$contenu = ob_get_clean();
require "view/template.php";