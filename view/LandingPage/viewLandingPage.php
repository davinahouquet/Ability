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
require "http://localhost/Ability/view/template.php";
?>