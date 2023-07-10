

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ability/Addition</title>
</head>
<body>
    


<?php
$nombre1 = rand(0, 10); // Génère un nombre aléatoire entre 0 et 100
$nombre2 = rand(0, 10); // Génère un autre nombre aléatoire entre 0 et 100

$resultat = $nombre1 + $nombre2; // Calcule le résultat de l'addition

// Affiche l'opération et demande au joueur de deviner le résultat

?>

    <div class="addition-container">

        <div class="question">
            <?php echo "Combien font $nombre1 + $nombre2 ?\n"; ?>
        </div>

    </div>

<?php
// Lit la réponse du joueur depuis l'entrée standard
$reponseJoueur = readline("Votre réponse : ");

// Vérifie si la réponse du joueur est correcte
if ($reponseJoueur == $resultat) {
    echo "Bravo, c'est la bonne réponse !";
} else {
    echo "Désolé, la réponse correcte était $resultat."; 
}
?>




</body>
</html>
