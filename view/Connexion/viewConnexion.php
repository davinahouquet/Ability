<?php
ob_start();
?>
<div class="container-form">

    <form enctype='multipart/form-data' action="index.php?action=signin>" method="post" class="connexion-form">
    
        <h1>S'inscrire</h1>

        <div class="form-input">
            <label for="account-name">Nom du compte</label>
            <input type="text" placeholder="Groupe vert" name="account-name" value="<?= $utilisateur["role"]?>">
        </div>
        <div class="form-input">
            <label for="email">Adresse Mail</label>
            <input type="email" placeholder="Last Name" name="nom" value="<?= $utilisateur["email"]?>">
        </div>
        <div class="form-input">
            <label for="password">Mot de passe</label>
            <input type="email" placeholder="Last Name" name="nom" value="<?= $utilisateur["password"]?>">
        </div>
        <div class="form-input">
            <label for="password">Confirmez le mot de passe</label>
            <input type="email" placeholder="Last Name" name="nom" value="<?= $utilisateur["password"]?>">
        </div>
        <div class="details-film-button">
            <input type="submit" name="signin">
        </div>
    </form>

</div>
<div class="container-form">

    <form enctype='multipart/form-data' action="index.php?action=login>" method="post" class="connexion-form">
    
        <h1>Se connecter</h1>

        <div class="form-input">
            <label for="account-name">Adresse Mail</label>
            <input type="text" placeholder="Groupe vert" name="account-name" value="<?= $utilisateur["role"]?>">
        </div>
        <div class="form-input">
            <label for="password">Mot de passe</label>
            <input type="email" placeholder="Last Name" name="nom" value="<?= $utilisateur["password"]?>">
        </div>
        <div class="details-film-button">
            <input type="submit" name="login">
        </div>
    </form>
    
</div>

<?php
$titre = "Connexion";
$contenu = ob_get_clean();
require "template.php";
//Le require de fin permet d'injecter le contenu dans le template "squelette" > template.php