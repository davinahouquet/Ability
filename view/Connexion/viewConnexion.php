<?php
ob_start();
?>
<section class="viewConnexion-container">

    <div class="inscription-container-form">

        <form enctype='multipart/form-data' action="index.php?action=register" method="post" class="connexion-form">
        
            <h1>S'inscrire</h1>

            <div class="nom-couleur">
                <div class="form-input">
                    <label for="account-name">Nom du compte</label>
                    <input type="text" placeholder="Nom du compte" name="pseudo">
                </div>
                <div class="form-input">
                    <label for="account-name">Couleur</label>
                    <input type="color" name="couleur" id="color">
                </div>
            </div>

            <div class="form-input">
                <label for="email">Adresse Mail</label>
                <input type="email" placeholder="Adresse Mail" name="email">
            </div>
            <div class="form-input">
                <label for="password">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" name="password">
            </div>
            <div class="form-input">
                <label for="password">Confirmez le mot de passe</label>
                <input type="password" placeholder="Confirmez mot de passe" name="password">
            </div>
            <div class="button-container">
                <input type="submit" name="submitRegister" class="submit-button">
            </div>
        </form>

    </div>

    <span class="vertical-line"></span>
    
    <div class="connexion-container-form">

        <form enctype='multipart/form-data' action="index.php?action=login" method="post" class="connexion-form">
        
            <h1>Se connecter</h1>

            <div class="form-input">
                <label for="account-name">Adresse Mail</label>
                <input type="text" placeholder="Groupe vert" name="account-name" value="">
            </div>
            <div class="form-input">
                <label for="password">Mot de passe</label>
                <input type="email" placeholder="**********" name="nom" value="">
                <p class="mdp-oublie"><a href="#">Mot de passe oublié</a></p>
            </div>
            <div class="button-container">
                <input type="submit" name="login" class="submit-button">
            </div>
        </form>
        
    </div>
</section>
<?php
$titre = "Connexion";
$contenu = ob_get_clean();
require "view/template.php";
//Le require de fin permet d'injecter le contenu dans le template "squelette" > template.php