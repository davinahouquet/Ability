<?php
ob_start();
?>


<?php
$titre = "Ability";
$titre_secondaire = "Accueil";
$contenu = ob_get_clean();
require "view/template.php";
?>