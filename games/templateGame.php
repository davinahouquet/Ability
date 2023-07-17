<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public/img/favicon1.ico.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="http://localhost/Ability/games/style.game.css">
    <title>Ability/<?= $titre ?></title>
</head>

<header>
    
    <nav>
        <div class="ability-logo">
            <a href="http://localhost/Ability/index.php?action=landingPage"><img class="logo" src="http://localhost/Ability/public/img/logo.png"></a>
        </div>
        <ul class="navigation">
            <p><a href="index.php?action=categorie" class="navigation-item">Catégories</a></p>

            <!-- CONNEXION - COMPTE - UTILISATEURS - ADMIN -->
            <?php
                // if connected...
                if(isset($_SESSION["pseudo"])){
                    echo $_SESSION["pseudo"];
                } else {
                    echo "<p><a href='index.php?action=connexion' class='navigation-item'>Connexion</a></p>";
                }
            ?>
            <div class="user-color"></div>
            <?php
                //else if connected...
            ?>
            <!-- <p class=""><a href="index.php?action=account&id=#">$account-name</a></p> -->

            <?php
                //else if username...
            ?>
            <!-- <p class=""><a href="index.php?action=username&id=#">$username</a></p> -->

            <?php
                //else if Admin...
            ?>
            <!-- <p class=""><a href="index.php?action=#">Admin</a></p> -->

            <?php
                //else ...
            ?>
            <!-- <p class=""><a href="index.php?action=#">Super Admin</a></p> -->

        </ul>
    </nav>
</header>

<body>
    <main>

        <!-- Contient la description et le jeu -->
        <div class="description-jeu-container">
            <!-- Contient le nom du jeu et la consigne -->
            <div class="titre-consigne">
                <h1><?= $nomJeu ?></h1>
                <h2>Niveau <?= $level ?></h2>
                <div class="infos-joueur">
                    <p>(si pas connecté)<a href="#">Connectez-vous</a> pour sauvegarder votre progression</p>
                    <p>(si connecté)Niveau : /numéro du niveau/</p>
                </div>
                <p class="categories">Categories (à faire)</p>
            </div>

            <!-- Contient l'espace jeu -->
            <div class="jeu-container">
                <div class="jeu">
                    <?= $game ?>
                </div>
            </div>
        </div>

    </main>

</body>

<footer>

    <div class="socials">
        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" id="social-item"></i></a>
        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook" id="social-item"></i></a>
        <a href="https://www.linkedin.com/notifications/?filter=all"><i class="fa-brands fa-linkedin" id="social-item"></i></a>
    </div>

</footer>

<script src="http://localhost/Ability/public/js/script.js"></script>
</html>