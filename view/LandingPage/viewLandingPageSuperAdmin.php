<?php
ob_start();
$jeux = $requeteJeu->fetchAll();
// $categorie = $requeteCategorie->fetch();
?>

<div class="landingPage">
    <?php 
    
    foreach($jeux as $jeu){

    ?>
       <div class="gameCard"><a href="index.php?action=jeu&id=<?= $id ?>">
    <?php
        echo "<h2>". $jeu["nom_jeu"] ."</h2>";

        if($jeu["image"] === NULL){
            echo "<img src='public/img/defaut.png' width='200'>";
        } else {
            echo "<img src=". $jeu["image"] ." width='200'>";
        }

            echo "<p>". $jeu["consigne"] ."</p>";

        // foreach($categorie as $categorie){
        //     echo "<p>". $categorie["nom_categorie"] ."</p>";
        // }
        ?>
        </a></div>
        <?php
    }
    ?>
</div>
        <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->

  

<?php
$titre = "Ability";
$titre_secondaire = "Accueil";
$contenu = ob_get_clean();
require "view/template.php";
?>