<!-- Accessible depuis la vue AdminConnexion -->
<?php
ob_start();
?>
    <div class="admin-connexion-container">
        <h1 class="admin-connexion-h1">Login SuperAdmin</h1>
    
        <label for="email">Adresse email</label>
            <input name="email" type="email" class="admin-connexion-password" placeholder="Email"><br>
            <label for="password">Mot de passe</label>
            <input name="password" type="password" class="admin-connexion-password" placeholder="Mot de passe">
    
        <input type="submit" name="submitAdmin" class="submit-button">
        
    </div>

<?php
$titre = "Ability";
$titre_secondaire = "Admin";
$contenu = ob_get_clean();
require "view/template.php";
// require "../../view/template.php";