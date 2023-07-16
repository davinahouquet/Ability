<?php
ob_start();
$jeux = $requeteJeu->fetchAll();
// $categorie = $requeteCategorie->fetch();
?>

    <section>

        <div class="landingPage">
    <?php 
    
    foreach($jeux as $jeu){

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

        // foreach($categorie as $categorie){
        //     echo "<p>". $categorie["nom_categorie"] ."</p>";
        // }
        ?>
        </div></a>
        <?php
    }
    ?>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    </section>

<?php
$titre = "Ability";
$titre_secondaire = "Accueil";
$contenu = ob_get_clean();
require "view/template.php";
?>