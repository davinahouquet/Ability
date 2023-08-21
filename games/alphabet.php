<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
        $nomJeu = "Alphabet";
        $consigne = "Appuie sur les lettres dans l'ordre !";
        $level = 1;
   ?>
 
    <div id="board"></div>

    <script>
        const box = document.createElement("div");
        box.classList.add("box");

        const board = document.querySelector("#board");

        let nb = 0; // Variable pour suivre la lettre de la boîte attendue
        const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        const nbBox = alphabet.length; // Nombre total de boîtes

        function shuffleChildren(parent) {
            let children = parent.children;
            let i = children.length, k, temp;
            while (--i > 0) {
                k = Math.floor(Math.random() * (i + 1));
                temp = children[k];
                children[k] = children[i];
                parent.appendChild(temp);
            }
        }

        function showReaction(type, clickedBox) {
            clickedBox.classList.add(type);
            if (type !== "success") {
                setTimeout(function () {
                    clickedBox.classList.remove(type);
                }, 800);
            }
        }

        function resetGame() {
            board.innerHTML = ""; // Supprimer toutes les boîtes

            for (let i = 0; i < nbBox; i++) {
                const newbox = box.cloneNode();
                newbox.innerText = alphabet[i];
                board.appendChild(newbox);
            }

            shuffleChildren(board);

            nb = 0;
            board.querySelectorAll(".box").forEach(function (box) {
                box.classList.remove("error", "box-valid", "notice");
            });
        }

        for (let i = 0; i < nbBox; i++) {
            const newbox = box.cloneNode();
            newbox.innerText = alphabet[i];
            board.appendChild(newbox);

            newbox.addEventListener("click", function () {
                if (i === nb) {
                    newbox.classList.add("box-valid");

                    if (nb === nbBox - 1) {
                        board.querySelectorAll(".box").forEach(function (box) {
                            showReaction("success", box);
                        });
                    }
                    nb++;
                } else if (i > nb) {
                    showReaction("error", newbox);
                    resetGame();
                } else {
                    showReaction("notice", newbox);
                }
            });
        }

        shuffleChildren(board);
    </script>

    <button class="rejouer"><a href="../alphabet">Rejouer</a></button>
</body>
</html>

<?php
$titre = "Ability";
$titre_secondaire = "Alphabet";
$game = ob_get_clean();
require "../games/templateGame.php";
?>