<?php
ob_start();
$jeux = $requeteJeu->fetchAll();
$categorie = $requeteCategorie->fetchAll();
?>

<div class="landingPage">
    <?php 
    
    foreach($jeux as $jeu){

    ?>
       <div class="gameCard">
            <a href="index.php?action=jeu&id=<?= $id ?>">
    <?php
        echo "<h2>". $jeu["nom_jeu"] ."</h2>";

        if($jeu["image"] === NULL){
            echo "<img src='public/img/defaut.png' width='200'>";
        } else {
            echo "<img src='public/img/".$jeu["image"]."' width='200'>";
        }

            echo "<p>". $jeu["consigne"] ."</p>";

        foreach($categorie as $cat){
            echo "<p>". $cat["nom_categorie"] ."</p>";
        }

        ?>
            </a>
        </div>
        <?php
    }
    ?>
</div>

<?php
$titre = "Ability";
$titre_secondaire = "Accueil";
$contenu = ob_get_clean();
require "view/template.php";
?>