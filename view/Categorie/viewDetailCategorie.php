<?php
ob_start();

$categorie = $requeteCategoriser->fetchAll();
?>

    <h1 class="h1-categorie"><?= $categorie["nom_categorie"] ?></h1>
    
    <section class="categorie">

    <div class="landingPage">
    <?php 
    
    foreach($categorie as $jeu){

    ?>
        <a href="index.php?action=jeu&id=<?= $id ?>"><div class="gameCard">
    <?php
        echo "<h2>". $jeu["nom_jeu"] ."</h2>";

        if($jeu["image"] === NULL){
            echo "<img src='public/img/defaut.png' width='200'>";
        } else {
            echo "<img src=". $jeu["image"] ." width='200'>";
        }

            echo "<p>". $jeu["consigne"] ."</p>";
        ?>
        </div></a>
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