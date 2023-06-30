<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/Ability/public/css/style.css">
    <title>Ability</title>
</head>

<header>
    <nav>
        <div class="ability-logo">
            <img src="#">
            <p class="ability">Ability</p>
        </div>
        <ul>
            <p class=""><a href="index.php?action=#">Catégories</a></p>

            <!-- CONNEXION - COMPTE - UTILISATEURS - ADMIN -->
            <?php
                // if NOT connected...
            ?>
            <p class=""><a href="index.php?action=#">Connexion</a></p>

            <?php
                //else if connected...
            ?>
            <p class=""><a href="index.php?action=#">$account-name</a></p>

            <?php
                //else if username...
            ?>
            <p class=""><a href="index.php?action=#">$username</a></p>

            <?php
                //else if Admin...
            ?>
            <p class=""><a href="index.php?action=#">Admin</a></p>

            <?php
                //else ...
            ?>
            <p class=""><a href="index.php?action=#">Super Admin</a></p>

        </ul>
    </nav>
</header>
<body>
    
</body>
</html>