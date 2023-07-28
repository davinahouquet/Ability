<?php
ob_start();

$categorie = $requeteCategoriser->fetchAll();
$detailJeu = $requeteJeu->fetchAll();
?>


<section class="categorie">
    <div class="landingPage">

        <h1 class="h1-categorie"><?= $categorie["nom_categorie"] ?></h1>
        <?php 
    
    foreach($categorie as $jeu){

    ?>
        <!-- <a href="index.php?action=jeu&id=<?= $detailJeu["id_jeu"] ?>"> -->
        <div class="gameCard">
    <?php
        echo "<h2>". $jeu["nom_jeu"] ."</h2>";

        if($jeu["image"] === NULL){
            echo "<img src='public/img/defaut.png' width='200'>";
        } else {
            echo "<img src=". $jeu["image"] ." width='200'>";
        }

            echo "<p>". $jeu["consigne"] ."</p>";
        ?>
        </div>
    <!-- </a> -->
        <?php
    }
    ?>
        </div>

    </section>

<?php
$titre = "Ability";
$titre_secondaire = "Categorie";
$contenu = ob_get_clean();
require "view/template.php";
?>