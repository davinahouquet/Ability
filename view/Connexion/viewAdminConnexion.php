<!-- Accessible depuis "Paramètres" dans le dropdown -->
<?php
ob_start();
?>
    <form action="index.php?action=parametre" enctype="multipart/form-data" method="post" required>
        <div class="admin-connexion-container">
            <h1 class="admin-connexion-h1">Login Admin</h1>
            <label for="email">Adresse email</label>
            <input name="email" type="email" class="admin-connexion-password" placeholder="Email"><br>
            <label for="password">Mot de passe</label>
            <input name="password" type="password" class="admin-connexion-password" placeholder="Mot de passe">
        
            <input type="submit" name="submitAdmin" class="submit-button">
        
            <button class="admin-connexion-button"><a href="index.php?action=loginSuperAdmin" class="admin-connexion-superadmin">Accès SuperAdmin</a></button>
        </div>
    </form>

<?php
$titre = "Ability";
$titre_secondaire = "Admin";
$contenu = ob_get_clean();
require "view/template.php";