<?php
ob_start();
?>

    <section class="landingPage">


        <div class="gameCard">

        </div>


    </section>

<?php
$titre = "Ability";
$titre_secondaire = "Page d'accueil";
$contenu = ob_get_clean();
require "view/template.php";
?>