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
    <title><?= $titre. "\ " .$titre_secondaire ?></title>
</head>

<header>
    
<nav>
        <div class="ability-logo">
            <a href="http://localhost/Ability/index.php?action=landingPage"><img class="logo" src="http://localhost/Ability/public/img/logo.png"></a>
        </div>
            <ul class="navigation">
            <li><a href="index.php?action=deconnexion">Déconnexion</a></li>
                <li><a href="index.php?action=categorie">Catégories</a></li>
                <div class="dropdown-container">
                    <li class="dropdown">
                        <a href="#">
                            <?php
                            
                            if(isset($_SESSION['pseudo'])){
                                echo "<p>".$_SESSION['pseudo']."</p>";
                            } else {
                                echo "<p><a href='index.php?action=login' class='navigation-item'>Connexion</a></p>";
                            }
            
            // var_dump($utilisateur['pseudo']);die;
                        ?>
                        </a>
                        <ul class="dropdown-content">
                            <li>
                                <?php
                                // $compte = $requeteUtilisateur->fetchAll();
                                foreach($compte as $utilisateur){
                                    if($utilisateur['role'] == 'utilisateur'){
                                        echo "<div class='couleur-et-utilisateur'><div class='user-color-dropdown'style='background-color:".$utilisateur['couleur']."'></div><p class='utilisateur-dropdown'> ". $utilisateur['pseudo']."</p></div>";
                                    } else {
                                        echo "";
                                    }
                                }

                                ?></li>
                            <li><a href="index.php?action=loginAdmin">Paramètres</a></li>
                            <li><a href="index.php?action=deconnexion">Déconnexion</a></li>
                        </ul>
                    </li>
                    <?php 
                        if(isset($_SESSION['couleur'])){
                            echo "<div class='user-color 'style='background-color:". $_SESSION['couleur'] .";'></div>";
                        } else {
                            echo "<div class='user-color 'style='background-color:'rgb(0,255,255)';'></div>";
                        }
                        ?>
                </div>
                    
                    </ul>
    </nav>

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
                <p><?= $consigne ?></p>
                <h2>Niveau <?= $level ?></h2>

                <div class="infos-joueur">
                    <?php
                        if(isset($_SESSION['pseudo'])){
                            echo "<p>Niveau : /numéro du niveau/</p>";
                        } else {
                           echo "<p><a href='index.php?action=login'>Connectez-vous</a> pour sauvegarder votre progression</p>";
                        }
                    ?>
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