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

    const alphabet = "AABCDEFGHIJKLMNOPQRSTUVWXYZ";

    const nbBox = alphabet.length; // Nombre total de boîtes

//--------------Fonction pour mélanger les box ------------------------------
        function schuffleChildren(parent){
            let children = parent.children
            let i = alphabet.length, k, temp
            while(i > 0){
            k = Math.floor(Math.random() * (i+1))
            temp = board.children[k]
            board.children[k] = board.children[i]
            board.appendChild(temp)
            
          }
         }

//--------------Fonction pour changer la couleur des box ------------------
        function showReaction(type, clickedBox){
            clickedBox.classList.add(type)
            if(type !=="success"){
                setTimeout(function(){
                    clickedBox.classList.remove(type)
                }, 800)
            }
          }

//-------------Fonction pour réinitialiser en cas d'erreur -----------------
        function resetGame(children) {
            while (board.children) {
            board.removeChild(board.children);
            while(i > 0){
            k = Math.floor(Math.random() * (i+1))
            temp = board.children[k]
            board.children[k] = board.children[i]
            board.appendChild(temp)
          }
            }

            for (let i = 1; i < nbBox; i++) {
            const newbox = box.cloneNode();
            newbox.innerText = alphabet[i];
            board.appendChild(newbox);
            }

            shuffleChildren(board);

            nb = 1;
            board.querySelectorAll(".board").forEach(function (Box) {
            box.classList.remove("error");
            });
        }
          
          const box = document.createElement("div")
          box.classList.add("box")

          const board = document.querySelector("#board")

        //   const nbBox = prompt("Entrez le nombre de boîtes souhaité :" )

          let nb = 1 /*on déclare une variable nb qui représentera le numéro de la boite attendue et qui s'incrémentera en cas de clic valide ! */

          for(let i = 1; i < nbBox; i++){
            const newbox = box.cloneNode()
            newbox.innerText = alphabet[i];
            board.appendChild(newbox)

            newbox.addEventListener("click", function(){
                
                 if(i == nb){ /*on vérifie d'abord si la boite sur laquelle le clic s'effectue possède le même numéro que ce que contient la variable nb. Si c'est le cas, on ajoute la classe CSS "box-valid" et on incrémente nb*/
                    newbox.classList.add("box-valid")

                    if(nb == board.children.length){
                        board.querySelectorAll(".box").forEach(function(box){
                            showReaction("success", box)
                        })
                    }
                    nb++
                 }

                    else if(i > nb){
                        showReaction("error", newbox)
                        resetGame();
                 }

                    else{
                        showReaction("notice", newbox)
                    }
            })
          }
          
          schuffleChildren(board)

        </script>

        <style>
            #board{
                display: flex;
                flex-wrap: wrap;
                width: 600px;
                height: 400px;
                padding: 20px;
            }

            .box{
                width: 50px;
                height: 50px;
                border: 0px solid black;
                background-color: rgb(118, 212, 223);
                font-size: 15px;
                text-align: center;
                line-height: 75px;
                margin: 5px;
                animation: appear 1s;
                border-radius: 6px;
                cursor : pointer;
                transition : background-color 0.8s, color 0.8s, transform 0.8s;
            }

            .box-valid{
                background-color: #ccc;
                color: #aaa;
                transform : scale(0.8);
            }

            .box.error{
                color: rgb(163, 0, 0);
                background-color: rgb(255, 160, 190);
            }
            .box.success{
                color: green;
                background: rgb(172, 251, 172);
            }
            .box.notice{
                color: rgb(17, 91, 134);
                background-color: rgb(184, 217, 255);
                cursor: not-allowed;
            }

            @keyframes appear{
                from{
                    transform: scale(0) rotate(180deg)
                }
                to {
                    transform: scale(1) rotate (0deg)
                }
            }

            .rejouer{
                max-height: 30px;
                margin-top: 150px;
            }
        </style>

    <button class="rejouer"><a href="alphabet.php">Rejouer</a></button>
</body>
</html>

<?php
$titre = "Ability";
$titre_secondaire = "Alphabet";
$game = ob_get_clean();
require "../games/templateGame.php";
?> 