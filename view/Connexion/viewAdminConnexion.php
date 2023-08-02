<!-- Accessible depuis "Paramètres" dans le dropdown -->
<?php
ob_start();
?>
    <div class="admin-connexion-container">
        <h1 class="admin-connexion-h1">Login Admin</h1>
    
        <input type="password" class="admin-connexion-password" placeholder="Mot de passe">
    
        <input type="submit" name="submitAdmin" class="submit-button">
    
        <button class="admin-connexion-button"><a href="index.php?action=loginSuperAdmin" class="admin-connexion-superadmin">Accès SuperAdmin</a></button>
    </div>

<?php
$titre = "Ability";
$titre_secondaire = "Admin";
$contenu = ob_get_clean();
require "view/template.php";