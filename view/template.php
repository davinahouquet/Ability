<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public/img/favicon1.ico.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="http://localhost/Ability/public/css/style.css">
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

    <!-- <nav>
        <div class="ability-logo">
            <a href="http://localhost/Ability/index.php?action=landingPage"><img class="logo" src="http://localhost/Ability/public/img/logo.png"></a>
        </div>
        <ul class="navigation">
            <p><a href="index.php?action=deconnexion">Déconnexion</a></p>
            <p><a href="index.php?action=categorie" class="navigation-item">Catégories</a></p> -->

            <!-- CONNEXION - COMPTE - UTILISATEURS - ADMIN -->
            <?php
                // if connected...
            //     if(isset($_SESSION['pseudo'])){
            //         echo "<p>".$_SESSION['pseudo']."</p>";
            //     } else {
            //         echo "<p><a href='index.php?action=connexion' class='navigation-item'>Connexion</a></p>";
            //     }

            // if(isset($_SESSION['couleur'])){
            //     echo "<div class='user-color 'style='background-color:". $_SESSION['couleur'] .";'></div>";
            // } else {
            //     echo "<div class='user-color 'style='background-color:'rgb(0,255,255)';'></div>";
            // }
            ?>
            <?php
                //else if connected...
            ?>
            <!-- <p class=""><a href="index.php?action=account&id=#">$account-name</a></p>
                <input type="color" value="..."> -->

            <?php
                //else if username...
            ?>
            <!-- <p class=""><a href="index.php?action=username&id=#">$username</a></p>
                <input type="color" value="..."> -->

            <?php
                //else if Admin...
            ?>
            <!-- <p class=""><a href="index.php?action=#">Admin</a></p>
                <input type="color" value="..."> -->

            <?php
                //else ...
            ?>
            <!-- <p class=""><a href="index.php?action=#">Super Admin</a></p>
                <input type="color" value="..."> -->

        </ul>
    </nav>
</header>

<body>
    
    <main>
        <?= $contenu ?>
    </main>

    <footer>
        
        <div class="socials">
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" id="social-item"></i></a>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook" id="social-item"></i></a>
            <a href="https://www.linkedin.com/notifications/?filter=all"><i class="fa-brands fa-linkedin" id="social-item"></i></a>
        </div>
        
    </footer>
</body>

<script src="js/script.js"></script>
</html>