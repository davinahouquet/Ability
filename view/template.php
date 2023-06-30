<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="http://localhost/Ability/public/css/style.css">
    <title>Ability</title>
</head>

<header>
    
    <nav>
        <div class="ability-logo">
            <img class="logo" src="http://localhost/Ability/public/img/logo.png">
        </div>
        <ul class="navigation">
            <p><a href="index.php?action=#" class="navigation-item">Catégories</a></p>

            <!-- CONNEXION - COMPTE - UTILISATEURS - ADMIN -->
            <?php
                // if NOT connected...
            ?>
            <p ><a href="index.php?action=#" class="navigation-item">Connexion</a></p>
            <div class="user-color"></div>
            <?php
                //else if connected...
            ?>
            <!-- <p class=""><a href="index.php?action=#">$account-name</a></p> -->

            <?php
                //else if username...
            ?>
            <!-- <p class=""><a href="index.php?action=#">$username</a></p> -->

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
    
</body>
</html>