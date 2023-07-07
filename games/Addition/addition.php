<?php
// ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ability/Addition</title>
</head>
<body>
    
    <?php
        $nombre1 = rand(0, 100); // Génère un nombre aléatoire entre 0 et 100
        $nombre2 = rand(0, 100); // Génère un autre nombre aléatoire entre 0 et 100

        $resultat = $nombre1 + $nombre2; // Calcule le résultat de l'addition

        // Affiche l'opération et le résultat
        echo "Combien font $nombre1 + $nombre2 ?\n";
        echo "Le résultat est : $resultat";
    ?>



</body>
</html>

<?php
$titre = "Ability";
$titre_secondaire = "Addition";
$contenu = ob_get_clean();
// require ("view/template.php");
?>