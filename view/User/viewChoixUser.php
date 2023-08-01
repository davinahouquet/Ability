<?php
ob_start();
// $utilisateurs->fetchAll();
?>
<!-- Normalement dans le dropdown -->
<section class="choix-utilisateurs-parametres">

    <!-- <h1>Choix utilisateurs</h1>
    <button><a href="index.php?action=utilisateur">Créer un utilisateur</a></button> -->

    <h1>Liste d'utilisateurs</h1>
    
    <input type="text" id="nom" placeholder="Nom d'utilisateur">
    <input type="text" id="age" placeholder="Âge">
    <button onclick="ajouterUtilisateur()">Ajouter</button>

    <ul id="listeUtilisateurs">
        <!-- Ici, les utilisateurs seront ajoutés dynamiquement -->
    </ul>

    <?php
        // foreach($utilisateurs as $utilisateur){
        //     echo "<h3>".$utilisateur['pseudo']."</h3>";
        //     echo "<div class='user-color 'style='background-color:". $utilisateur['couleur'] .";'></div>";
        // }
    ?>

</section>
<?php
$titre = "Ability";
$titre_secondaire = "Choix Utilisateurs";
$contenu = ob_get_clean();
require "../../view/template.php";
//Le require de fin permet d'injecter le contenu dans le template "squelette" > template.php